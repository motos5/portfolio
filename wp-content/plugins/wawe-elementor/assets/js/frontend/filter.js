jQuery(function($) {
    // Получаем єлементы со страницы
    const buttons = document.querySelectorAll('.gallery__filtr-btn');

    let buttonAttr;
    function getAtributsSet(button) {
        button.addEventListener('click', function(e) {
            const id = button.dataset.id > 0 ? button.dataset.id : -1;
            const filter = (button.dataset.filter == 'all') ? button.dataset.filter : button.dataset.filter.slice(1);
            
            if(id && filter) {
                getAtributs(id, filter);
            }
        });
    }

    buttons.forEach(item => {
        getAtributsSet(item);
    });

    //Main ajax function
    function getAtributs(term_id, filter) {

        var ajax_url = wawe_settings.ajax_url;
        $.ajax({
            type: 'POST',
            url: ajax_url,
            data: {
                action: 'wawe_filter',
                term_id: term_id,
                filter: filter
            },
            beforeSend: function ()
            {
                const data = 
                `<div class="filter-load"></div><?xml version="1.0" encoding="utf-8"?>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: none; display: block; shape-rendering: auto;" width="30px" height="30px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                    <circle cx="50" cy="50" fill="none" stroke="#000" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138">
                    <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
                    </circle>
                </svg></div>`;
                $('.gallery__content').html(data);
            },
            success: function(data)
            {
                //Hide loader here
                $('.gallery__content').html(data);
            },
            error: function()
            {
                $("#main").html('<p>There has been an error</p>');
            }
        });
    }

    getAtributs();
});
