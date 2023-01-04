<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">planning</span>
                        <span class="section-heading-lower">jeux libres</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">

                        <li></li> <!-- pour le dimanche ref à JS jour d'aujourd'hui en couleur -->

                        <?php

                        foreach ($array as $day => $hours) {
                            echo '<li class="list-unstyled-item list-hours-item d-flex">' .
                                $day .
                                '<span class="ms-auto">' . $hours . '</span>
                        </li>';
                        }

                        ?>

                        <li></li> <!-- pour le samedi -->

                    </ul>
                    <p class="address mb-5">
                        <em>
                            <strong>Gymnase Jean Mermoz</strong>
                            <br />
                            717 Av. Jean Mermoz, 34000 Montpellier
                            <br><br>
                        </em>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d184882.98700372537!2d3.610769232812498!3d43.610775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6af75e9982b11%3A0xc6dd43f58630d399!2sLyc%C3%A9e%20Jean%20Mermoz!5e0!3m2!1sfr!2sfr!4v1672831804524!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </p>
                    <p class="mb-0">
                        <small><em>Contact</em></small>
                        <br />
                        (+33) 6.45.78.32.45
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include "content/equipe_content.php";
?>