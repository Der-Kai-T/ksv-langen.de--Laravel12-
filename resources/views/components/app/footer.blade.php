<!-- ======= Footer ======= -->
<footer id="footer">
    <?php
    /*
        <div class="footer-newsletter">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-6">
                <h4>Join Our Newsletter</h4>
                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                <form action="" method="post">
                  <input type="email" name="email"><input type="submit" value="Subscribe">
                </form>
              </div>
            </div>
          </div>
        </div>
    */?>
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Kraftsportverein 1959 Langen e.V.</h3>
                    <p>
                        Zimmerstraße 1 <br>
                        63225 Langen<br><br>
                        <strong>Telefon:</strong> <a href='tel:+49610352855'>06103 52 855</a><br>
                        <strong>E-Mail:</strong> <a href='mailto:geschaeftsstelle@ksv-langen.de'>geschaeftsstelle@ksv-langen.de</a><br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Hilfreiche Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="index.php">Startseite</a></li>

                        <li><i class="bx bx-chevron-right"></i> <a href="index.php?page=imprint">Impressum</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="index.php?page=privacy">Datenschutz</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Dokumente</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="downloads/satzung.pdf" targe='_blanck'>Satzung</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="downloads/hausordnung.pdf" targe='_blanck'>Hausordnung</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="downloads/geschäftsordnung.pdf" targe='_blanck'>Geschäftsordnung</a></li>

                        <li><i class="bx bx-chevron-right"></i> <a href="downloads/mitgliedsbeiträge.pdf" targe='_blanck'>Mitgliedsbeiträge</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="downloads/passive_mitgliedschaft.pdf" targe='_blanck'>Passive Mitgliedschaft</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="downloads/alternative.pdf" targe='_blanck'>Alternative Möglichkeiten</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Soziale Medien</h4>
                    <p>Der Kraftsportverein in den sozialen Medien (externe Links)</p>
                    <div class="social-links mt-3">
                        <a href="https://www.facebook.com/KSVLangen" class="facebook" target='_blanck'><i class="fab fa-facebook"></i></a>
                        <a href="https://instagram.com/ksvlangen" class="instagram" target='_blanck'><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@Kraftsportverein1959Langen" class="youtube" target='_blanck'><i class="fab fa-youtube"></i></a>




                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            @php($year = \Carbon\Carbon::now()->year)
            &copy; Copyright <strong>KSV 1959 Langen e.V.</strong> | 2023 - {{ $year }}
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
            Template designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->
