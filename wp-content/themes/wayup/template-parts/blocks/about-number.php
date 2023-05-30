<?php
// About Number
$about_number_percentage = get_field('about_number_percentage');
$about_number_text = get_field('about_number_text');
?>

<?php if($about_number_percentage && $about_number_text) { ?>
    <div class="numbers__item">
        <svg class="radial-progress" data-percentage="<?php echo esc_attr($about_number_percentage); ?>" viewBox="0 0 80 80">
            <!-- Gradient -->
            <linearGradient id="linear-gradient">
                <stop offset="0%" stop-color="#00a2ff"/>
                <stop offset="100%" stop-color="#0cf"/>
            </linearGradient>
            <!-- Shadow -->
            <defs>
                <filter id="dropshadow" x="-40%" y="-40%" width="180%" height="180%" filterUnits="userSpaceOnUse">
                    <feOffset result="offOut" in="SourceGraphic" dx="0" dy="0" />
                    <feColorMatrix result="matrixOut" in="offOut" type="matrix"
                        values="0.5 0 0 0 0 0 0.5 0 0 0 0 0 0.5 0 0 0 0 0 1 0" />
                    <feGaussianBlur result="blurOut" in="matrixOut" stdDeviation="2" />
                    <feBlend in="SourceGraphic" in2="blurOut" mode="normal" />
                </filter>
                </defs>
            
            <circle class="incomplete" cx="40" cy="40" r="35">></circle>
            <circle class="complete"  cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)"></text>
        </svg>
        <?php if($about_number_text) { ?>
            <span class="numbers__text"><?php printf(esc_html__('%1$s', 'wayup'), $about_number_text); ?></span>
        <?php } ?>
    </div>
<?php } ?>