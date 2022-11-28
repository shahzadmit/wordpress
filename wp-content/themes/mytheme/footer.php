<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                <div class="social d-flex justify-content-center justify-content-xs-center justify-content-sm-center justify-content-md-evenly align-items-center">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fb.png" alt=""/>
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png" alt=""/>
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/xing.png" alt=""/>
                    </a>
                </div>
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                <div class="d-flex align-items-center justify-content-center justify-content-xs-center justify-content-sm-center justify-content-md-end menu_footer menu-footer_de-container">
                    <ul id="menu-footer_de" class="d-flex flex-wrap flex-column flex-xs-column flex-sm-column flex-md-row footer-nav-menu">
                        <li id="menu-item-76" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-76">
                            <a title="Produktkataloge" href="https://www.elwa.com/de/downloads-2/">Downloads/Zertifikate</a>
                        </li>
                        <li id="menu-item-1515" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1515">
                            <a title="Ihr Weg zu uns!" href="https://www.elwa.com/de/kontakt/">Kontakt</a>
                        </li>
                        <li id="menu-item-3233" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3233">
                            <a href="https://www.elwa.com/de/haendler/">Händler</a>
                        </li>
                        <li id="menu-item-77" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-77">
                            <a title="Allgemeine Geschäftsbedingungen" href="https://www.elwa.com/de/agb/">AGB</a>
                        </li>
                        <li id="menu-item-79" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-79">
                            <a title="Ihre Daten sind bei uns sicher!" href="https://www.elwa.com/de/datenschutz/">Datenschutz</a>
                        </li>
                        <li id="menu-item-2560" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2560">
                            <a href="https://www.elwa.com/de/impressum/">Impressum</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Modal Händler-->
<div class="modal fade modal_handler" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">Händler</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-12">
                       <div class="first_part">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores</div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-6 col-sm-6 col-md-6 col-lg-8 col-xl-8 col-xxl-8">
                       <div class="block_with_border">Europa</div>
                  </div>
                   <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                       <div class="block_with_border">Asien</div>
                  </div>
              </div>
               <div class="row">
                   <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                        <address class="address">
                           <h6 class="address_h">Norwegen</h6>
                           <strong>Alekto A/S</strong><br/>
                           <span>Nesbruveien 75</span><br/>
                           <span>N – 1394 Nesbru</span><br/>
                           <abbr title="Phone">Tel.:</abbr> <a href="tel:+4766777333">+47-66 77 73 33</a><br/>
                           <a href="https://alekto.no/" rel="noopener noreferrer" target="_blank">www.alekto.no</a><br/>
                           <a href="mailto:post@alekto.no">post@alekto.no</a>
                        </address>
                   </div>
                   <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                       <address class="address">
                           <h6 class="address_h">Norwegen</h6>
                           <strong>Alekto A/S</strong><br/>
                           <span>Nesbruveien 75</span><br/>
                           <span>N – 1394 Nesbru</span><br/>
                           <abbr title="Phone">Tel.:</abbr> <a href="tel:+4766777333">+47-66 77 73 33</a><br/>
                           <a href="https://alekto.no/" rel="noopener noreferrer" target="_blank">www.alekto.no</a><br/>
                           <a href="mailto:post@alekto.no">post@alekto.no</a>
                        </address>
                   </div>
                   <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                       <address class="address">
                           <h6 class="address_h">Norwegen</h6>
                           <strong>Alekto A/S</strong><br/>
                           <span>Nesbruveien 75</span><br/>
                           <span>N – 1394 Nesbru</span><br/>
                           <abbr title="Phone">Tel.:</abbr> <a href="tel:+4766777333">+47-66 77 73 33</a><br/>
                           <a href="https://alekto.no/" rel="noopener noreferrer" target="_blank">www.alekto.no</a><br/>
                           <a href="mailto:post@alekto.no">post@alekto.no</a>
                        </address>
                   </div>
                   <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                       <address class="address m-0">
                           <h6 class="address_h">Norwegen</h6>
                           <strong>Alekto A/S</strong><br/>
                           <span>Nesbruveien 75</span><br/>
                           <span>N – 1394 Nesbru</span><br/>
                           <abbr title="Phone">Tel.:</abbr> <a href="tel:+4766777333">+47-66 77 73 33</a><br/>
                           <a href="https://alekto.no/" rel="noopener noreferrer" target="_blank">www.alekto.no</a><br/>
                           <a href="mailto:post@alekto.no">post@alekto.no</a>
                        </address>
                   </div>
                   <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                       <address class="address m-0">
                           <h6 class="address_h">Norwegen</h6>
                           <strong>Alekto A/S</strong><br/>
                           <span>Nesbruveien 75</span><br/>
                           <span>N – 1394 Nesbru</span><br/>
                           <abbr title="Phone">Tel.:</abbr> <a href="tel:+4766777333">+47-66 77 73 33</a><br/>
                           <a href="https://alekto.no/" rel="noopener noreferrer" target="_blank">www.alekto.no</a><br/>
                           <a href="mailto:post@alekto.no">post@alekto.no</a>
                        </address>
                   </div>
                   <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                       <address class="address m-0">
                           <h6 class="address_h">Norwegen</h6>
                           <strong>Alekto A/S</strong><br/>
                           <span>Nesbruveien 75</span><br/>
                           <span>N – 1394 Nesbru</span><br/>
                           <abbr title="Phone">Tel.:</abbr> <a href="tel:+4766777333">+47-66 77 73 33</a><br/>
                           <a href="https://alekto.no/" rel="noopener noreferrer" target="_blank">www.alekto.no</a><br/>
                           <a href="mailto:post@alekto.no">post@alekto.no</a>
                        </address>
                   </div>
               </div>
          </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Ersatzteile -->
<div class="modal fade modal_handler" id="modal_ers" tabindex="-1" aria-labelledby="modal_ers" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">Ersatzteile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
          <div class="container-fluid">
               <div class="fixed_wrapper-1">
               <div class="row">
                  <div class="col-12">
                       <div class="first_part">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores</div>
                  </div>
               </div>
               </div>
                <div class="row">
                   <div class="col-12 text-center">
                      <img src="img/ersatzteile_img.png" alt="" class="ers_img"/>
                   </div>
                </div>
                <div class="fixed_wrapper-1">
                  <form action="#" class="contact_form" method="post">
                      <div class="row">
                          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                              <input type="text" class="form-control one_input" required placeholder="Geräte Typ*" aria-label="Geräte Typ*" name="type">
                          </div>
                          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                              <input type="text" class="form-control one_input" required placeholder="Seriennummer*" aria-label="Seriennummer*" name="sn">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                              <input type="text" class="form-control one_input" required placeholder="Name*" aria-label="Name*" name="name">
                          </div>
                          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                              <input type="text" class="form-control one_input" required placeholder="Firma*" aria-label="Firma*" name="company">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-12 col-sm-4 col-md-4 col-lg-6 col-xl-6 col-xxl-6">
                              <input type="text" class="form-control one_input" required placeholder="Strasse*" aria-label="Strasse*" name="street">
                          </div>
                          <div class="col-12 col-sm-4 col-md-4 col-lg-2 col-xl-2 col-xxl-2">
                              <input type="text" class="form-control one_input" required placeholder="PLZ*" aria-label="PLZ*" name="plz">
                          </div>
                          <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                              <input type="text" class="form-control one_input" required placeholder="Ort*" aria-label="Ort*" name="ort">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                              <input type="text" class="form-control one_input" required placeholder="Telefon*" aria-label="Telefon*" name="phone">
                          </div>
                          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                              <input type="email" class="form-control one_input" required placeholder="E-mail Adresse*" aria-label="E-mail Adresse*" name="email">
                          </div>
                      </div> 
                      <div class="row">
                          <div class="col-12">
                              <input type="text" class="form-control one_input" required placeholder="Nachricht*" aria-label="Nachricht*" name="nachricht">
                          </div> 
                      </div>
                      <div class="row">
                          <div class="col-12">
                              <div class="form-check">
                                  <input class="form-check-input" required type="checkbox" id="agree_chk1">
                                  <label class="form-check-label" for="agree_chk1">Ich habe die Datenschutzerklärung gelesen und akzeptiere sie hiermit.*</label>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-12">
                              <span class="form_ps">*Pflichtfeld</span>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-12 d-flex justify-content-center">
                              <button type="submit" class="btn btn-primary btn-lg custom_button-1">E-Mail senden</button>
                          </div>
                      </div>
                  </form>
                </div>

          </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Kontakt -->
<div class="modal fade modal_handler" id="modal_contakt" tabindex="-1" aria-labelledby="modal_contakt" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">Kontakt</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
          <div class="container-fluid">
               <div class="fixed_wrapper-1">
               <div class="row">
                  <div class="col-12">
                      <div class="text-center">
                          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores</p>
                          <p><a href="#" class="a_popup">Zum Rückruf Formular</a></p>
                      </div>
                  </div>
               </div>
               </div>
               <div class="row text-0">
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 text-start text-sm-start text-md-start text-lg-end text-xl-end text-xxl-end">
                      <p class="semibold">Addresse</p>
                      <p class="regular">ELWA Elektro-Wärme GmbH &amp; Co. KG<br>
                          Frauenstr. 26, D-82216 Maisach</p>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                      <p class="semibold">GESCHÄFTSFÜHRE</p>
                      <p class="regular"><span class="semibold">TEL.:</span> 08141 528 46 66<br>
                          <span class="semibold">E-MAIL:</span> sales@elwa.com</p>
                  </div>
               </div>
                <div class="fixed_wrapper-1">
                  <form action="#" class="contact_form" method="post">
                      <div class="row">
                          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                              <input type="text" class="form-control one_input" required placeholder="Name*" aria-label="Name*" name="name">
                          </div>
                          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                              <input type="text" class="form-control one_input" required placeholder="Firma*" aria-label="Firma*" name="company">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-12 col-sm-4 col-md-4 col-lg-6 col-xl-6 col-xxl-6">
                              <input type="text" class="form-control one_input" placeholder="Strasse" aria-label="Strasse" name="street">
                          </div>
                          <div class="col-12 col-sm-4 col-md-4 col-lg-2 col-xl-2 col-xxl-2">
                              <input type="text" class="form-control one_input"  placeholder="PLZ" aria-label="PLZ" name="plz">
                          </div>
                          <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                              <input type="text" class="form-control one_input"  placeholder="Ort" aria-label="Ort" name="ort">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                              <input type="text" class="form-control one_input" required placeholder="Telefon*" aria-label="Telefon*" name="phone">
                          </div>
                          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                              <input type="email" class="form-control one_input" required placeholder="E-mail Adresse*" aria-label="E-mail Adresse*" name="email">
                          </div>
                      </div> 
                      <div class="row">
                          <div class="col-12">
                              <input type="text" class="form-control one_input" required placeholder="Betreff*" aria-label="Betreff*" name="betreff">
                          </div> 
                      </div>
                      <div class="row">
                          <div class="col-12">
                              <input type="text" class="form-control one_input" required placeholder="Nachricht*" aria-label="Nachricht*" name="nachricht">
                          </div> 
                      </div>
                      <div class="row">
                          <div class="col-12">
                              <div class="form-check">
                                  <input class="form-check-input" required type="checkbox" id="agree_chk2">
                                  <label class="form-check-label" for="agree_chk2">Ich habe die Datenschutzerklärung gelesen und akzeptiere sie hiermit.*</label>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-12">
                              <span class="form_ps">*Pflichtfeld</span>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-12 d-flex justify-content-center">
                              <button type="submit" class="btn btn-primary btn-lg custom_button-1">Senden</button>
                          </div>
                      </div>
                  </form>
                </div>
          </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Rückruf anfragen -->
<div class="modal fade modal_handler" id="modal_r_a" tabindex="-1" aria-labelledby="modal_r_a" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content"> 
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">Rückruf anfragen</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
            <div class="container-fluid">
                <div class="fixed_wrapper-1">
                  <div class="row">
                      <div class="col-12">
                          <div class="text-center">
                              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores</p>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="fixed_wrapper-1">
                  <form action="#" class="contact_form" method="post">
                      <div class="row">
                          <div class="col-12 col-xs-12 col-sm-12 col-md-6">
                              <input type="text" class="form-control one_input" required placeholder="Name*" aria-label="Name*" name="name">
                          </div>
                          <div class="col-12 col-xs-12 col-sm-12 col-md-6">
                              <input type="text" class="form-control one_input" required placeholder="Firma*" aria-label="Firma*" name="company">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-12">
                              <input type="text" class="form-control one_input" required placeholder="Telefon*" aria-label="Telefon*" name="phone">
                          </div>
                      </div> 
                      <div class="row">
                          <div class="col-12">
                              <div class="form-check">
                                  <input class="form-check-input" required type="checkbox" id="agree_chk2">
                                  <label class="form-check-label" for="agree_chk2">Ich habe die Datenschutzerklärung gelesen und akzeptiere sie hiermit.*</label>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-12">
                              <span class="form_ps">*Pflichtfeld</span>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-12 d-flex justify-content-center">
                              <button type="submit" class="btn btn-primary btn-lg custom_button-1">Senden</button>
                          </div>
                      </div>
                  </form>
                </div>
          </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Konstruktionsmerkmale -->
<div class="modal fade modal_handler" id="modal_product_info" tabindex="-1" aria-labelledby="modal_product_info" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title">ERH 4600 RF (öl/emulsion)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="container-fluid">
                    <div class="fixed_wrapper-1">
                        <div class="row">
                            <div class="col-12">
                                <div class="modal_internal text-center">
                                    <p>Die Erhitzer der Serie 4600 verfügen über Konstruktionsmerkmale, die sie zu den überlegenen Geäten auf dem Markt machen. Die hohe Variabilität des Designs erlaubt eine optimale Adaption an die Prozessbedingungen. Tausende dieser Erhitzer verrichten seit Jahrzehnten zuverlässig ihren Dienst in Schiffen, Kraftwerken und Industrieanlagen auf der ganzen Welt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="row">
                       <div class="col-12">
                           <div class="d-flex justify-content-between flex-wrap flex-xs-wrap flex-sm-wrap flex-md-wrap flex-lg-nowrap modal_internal">
                               <div>
                                   <h6 class="modal-subtitle">Konstruktionsmerkmale</h6>
                                   <p>Die Serie 4600 RF besteht aus einem geschweißten Druckbehälter mit elektrischem Heizeinsatz. Die Heizelemente stecken in Schutzrohren, sind also nicht in direktem Kontakt mit dem Medium. Die Heizelemente können ohne Entleeren des Behälters einzeln gewechselt werden und bieten hervorragende Eigenschaften hinsichtlich Ansprechverhalten und Umströmung.</p>
                                   <h6 class="modal-subtitle">Wärmeübertragung</h6>
                                   <p>Aufgrund der idealen Umströmung der Heizkörperschutzrohre findet eine schonende Erwärmung des Mediums statt. Die Oberflächenbelastung kann durch die anwendungsspezifische Auslegung der Heizelemente perfekt auf das Medium abgestimmt werden. Empfehlenswerte Oberflächenbelastungen:</p>

                                   <p><strong>0,8 W/cm²</strong><br/>
                                       Schmieröle/geringe Durchströmungen des Erhitzers</p>

                                   <p><strong>1,1 W/cm²</strong><br/>
                                       höherviskose Schweröle/mittlere Durchströmung</p>

                                   <p><strong>1,4 W/cm²</strong><br/>
                                       Marinediesel und leichte Schweröle/höhere Durchströmung</p>
                               </div>
                               <img src="img/product_example4.png" class="img_popup" alt=""/>
                           </div>
                           <div class="modal_internal">
                               <h5 class="modal_title-0 text-center">Eigenschaften & Optionen</h5>
                               
                               <div class="d-flex flex-column flex-xs-column flex-sm-column flex-md-column flex-lg-row align-items-start tabs">
                                   <div class="nav flex-column align-items-center nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                       <button class="nav-link active" id="sicherheit-tab" data-bs-toggle="pill" data-bs-target="#sicherheit" type="button" role="tab" aria-controls="sicherheit" aria-selected="true">Sicherheit</button>
                                       <button class="nav-link" id="thermische_isolierung-tab" data-bs-toggle="pill" data-bs-target="#thermische_isolierung" type="button" role="tab" aria-controls="thermische_isolierung" aria-selected="false">Thermische Isolierung</button>
                                       <button class="nav-link" id="prozessanschlusse-tab" data-bs-toggle="pill" data-bs-target="#prozessanschlusse" type="button" role="tab" aria-controls="prozessanschlusse" aria-selected="false">Prozessanschlüsse</button>
                                       <button class="nav-link" id="klassifikationen-tab" data-bs-toggle="pill" data-bs-target="#klassifikationen" type="button" role="tab" aria-controls="klassifikationen" aria-selected="false">Klassifikationen</button>
                                       <button class="nav-link" id="lackierung-tab" data-bs-toggle="pill" data-bs-target="#lackierung" type="button" role="tab" aria-controls="lackierung" aria-selected="false">Lackierung</button>
                                   </div>
                                   <div class="tab-content" id="v-pills-tabContent">
                                       <div class="tab-pane fade show active" id="sicherheit" role="tabpanel" aria-labelledby="sicherheit">
                                           <h4 class="tab_header">Sicherheit</h4>
                                           <p class="tab_text">Die Erhitzer werden immer mit eingebautem Sicherheitstemperaturbegrenzer (STB) ausgeliefert. Weitere optionale Ausstattungen im Bereich Anlagensicherheit sind Strömungswächter, Temperaturwächter, Pt-100 Sensoren und Sicherheitsventile.</p>
                                       </div>
                                       <div class="tab-pane fade" id="thermische_isolierung" role="tabpanel" aria-labelledby="thermische_isolierung">
                                           <h4 class="tab_header">Thermische Isolierung</h4>
                                           <p class="tab_text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores</p>
                                       </div>
                                       <div class="tab-pane fade" id="prozessanschlusse" role="tabpanel" aria-labelledby="prozessanschlusse">
                                           <h4 class="tab_header">Prozessanschlüsse</h4>
                                           <p class="tab_text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores</p>
                                       </div>
                                       <div class="tab-pane fade" id="klassifikationen" role="tabpanel" aria-labelledby="klassifikationen">
                                           <h4 class="tab_header">Klassifikationen</h4>
                                           <p class="tab_text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores</p>
                                       </div>
                                       <div class="tab-pane fade" id="lackierung" role="tabpanel" aria-labelledby="klassifikationen-tab">
                                           <h4 class="tab_header">Lackierung</h4>
                                           <p class="tab_text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores</p>
                                       </div>
                                   </div>
                               </div>
                               
                               <h5 class="modal_title-1 text-center">Übersichtstabelle Standardausführungen<br/>
                                   <small class="small">kundenspezifische Ausführungen auf Anfrage erhältlich!</small>
                               </h5>
                               
                               <div class="table-responsive">
                                   <table class="table table-hover popup_table">
                                       <tbody>
                                           <tr>
                                               <td colspan="10" class="text-end">Anschlussnennweite</td>
                                           </tr>
                                           <tr>
                                               <th scope="col">Typ</td>
                                               <th scope="col" colspan="3">Heizleistung (kW)</td>
                                               <th scope="col" colspan="3">Stufenaufteilung (kW)</td>
                                               <th scope="col" class="with_border-0">Min</td>
                                               <th scope="col" class="with_border-2">Norm</td>
                                               <th scope="col" class="with_border-1">Max</td>
                                           </tr>
                                           <tr>
                                               <td class="with_border-3">4603-RF-V</td>
                                               <td class="with_border-3">3</td>
                                               <td class="with_border-3">4</td>
                                               <td class="with_border-3">5</td>
                                               <td class="with_border-3">1x3</td>
                                               <td class="with_border-3">1x4</td>
                                               <td class="with_border-3">1x5</td>
                                               <td class="with_border-3">25</td>
                                               <td class="with_border-3">32</td>
                                               <td class="with_border-3">40</td>
                                           </tr>
                                           <tr>
                                               <td class="with_border-3">4603-RF-V</td>
                                               <td class="with_border-3">3</td>
                                               <td class="with_border-3">4</td>
                                               <td class="with_border-3">5</td>
                                               <td class="with_border-3">1x3</td>
                                               <td class="with_border-3">1x4</td>
                                               <td class="with_border-3">1x5</td>
                                               <td class="with_border-3">25</td>
                                               <td class="with_border-3">32</td>
                                               <td class="with_border-3">40</td>
                                           </tr>
                                           <tr>
                                               <td class="with_border-3">4603-RF-V</td>
                                               <td class="with_border-3">3</td>
                                               <td class="with_border-3">4</td>
                                               <td class="with_border-3">5</td>
                                               <td class="with_border-3">1x3</td>
                                               <td class="with_border-3">1x4</td>
                                               <td class="with_border-3">1x5</td>
                                               <td class="with_border-3">25</td>
                                               <td class="with_border-3">32</td>
                                               <td class="with_border-3">40</td>
                                           </tr>
                                           <tr>
                                               <td class="with_border-3">4603-RF-V</td>
                                               <td class="with_border-3">3</td>
                                               <td class="with_border-3">4</td>
                                               <td class="with_border-3">5</td>
                                               <td class="with_border-3">1x3</td>
                                               <td class="with_border-3">1x4</td>
                                               <td class="with_border-3">1x5</td>
                                               <td class="with_border-3">25</td>
                                               <td class="with_border-3">32</td>
                                               <td class="with_border-3">40</td>
                                           </tr>
                                           <tr>
                                               <td class="with_border-3">Oberflächen-belastung</td>
                                               <td class="with_border-3">0,8</td>
                                               <td class="with_border-3">1,1</td>
                                               <td class="with_border-3">1,4</td>
                                               <td class="with_border-3">0,8</td>
                                               <td class="with_border-3">1,1</td>
                                               <td class="with_border-3">1,4</td>
                                               <td class="with_border-3">W/cm2</td>
                                           </tr>
                                       </tbody>
                                   </table>
                               </div>
                               <div class="download_wr">
                                   <h5 class="modal_title-1 text-center">Download Datenblatt</h5>
                                   <div class="d-flex justify-content-center download_block">
                                       <a href="#" class="download_link">Durchlauferhitzer_ERH_4600-RF-Datenblatt.pdf</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/incl/bootstrap-5.0.2-dist/js/popper.min.js"></script>
<script src="/incl/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
<script>
    'use strict';

    jQuery(document).ready(function ($) {
        let js = $;

        /*js('.nav-menu li').on('mouseover', function(){
         let item = js(this);
         console.log('over');
         
         item.find('.sub-menu').toggleClass('d-none');
         });*/
    });
</script>

</body>
</html>
