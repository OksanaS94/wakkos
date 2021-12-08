<?php 
    include_once('header.php');
  ?>

  <main class="contact-us">

   <section class="call">
    <div class="container">
      <div class="call_text">
        <h2>¿Necesitas<br> ayuda?</h2>
        <p>Contacta con nosotros y te ayudaremos en todo lo que necesites</p>
        <div class="hero-box__add">
          <p>Contactar</p>
          <span>
            <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
             <path d="M14 8.5H8V14.5H6V8.5H0V6.5H6V0.5H8V6.5H14V8.5Z" fill="white"/>
            </svg>
            </span>
        </div>
      </div>
      <div class="call_image"><img src="img/call-img.png" alt="Call Center"></div>
    </div>
  </section>


  <section class="contact-us-details">
   <div class="container">
    <div class="row">
     <div class="contact-us-details_item">
      <h4>
       <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g opacity="0.5">
        <circle cx="6.5" cy="6.5" r="6.5" fill="#3F9977"/>
        <circle cx="6.5" cy="6.5" r="6.5" fill="#3F9968"/>
        </g>
        <g opacity="0.5">
        <circle cx="10.5" cy="9.5" r="4.5" fill="#3F9977"/>
        <circle cx="10.5" cy="9.5" r="4.5" fill="#990081"/>
        </g>
        </svg>
        
       Contacto
      </h4>
      <ul>
       <li>
        Lunes a jueves de 8:00h a 18:00h<br>
        Viernes de 8:00h a 15:00h
       </li>
       <li><a href="mailto: sico@sicocv.es">sico@sicocv.es</a></li>
       <li><a href="tel: 655571573">Tel: 655 571 573</a></li>
      </ul>
     </div>
     <div class="contact-us-details_item">
      <h4>
       <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g opacity="0.5">
        <circle cx="6.5" cy="6.5" r="6.5" fill="#3F6899"/>
        <circle cx="6.5" cy="6.5" r="6.5" fill="#3F6899"/>
        </g>
        <g opacity="0.5">
        <circle cx="8.5" cy="7.5" r="6.5" fill="#3F6899"/>
        <circle cx="8.5" cy="7.5" r="6.5" fill="#003499"/>
        </g>
        </svg>
        
       
       Oficina Madrid
      </h4>
      <ul>
       <li>
        C/ Arboleda 14, Of. 026<br>
        28031 Madrid
       </li>
       <li><a href="tel: 913310580">Tel: 91 331 05 80</a></li>
       <li><a href="fax: 913324864">Fax: 91 332 48 64</a></li>
      </ul>
     </div>
     <div class="contact-us-details_item">
      <h4>
       <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g opacity="0.5">
        <circle cx="7.5" cy="8" r="7.5" fill="#3F9977"/>
        <circle cx="7.5" cy="8" r="7.5" fill="#A66300"/>
        </g>
        <g opacity="0.5">
        <circle cx="7.5" cy="8" r="5.5" fill="#3F9977"/>
        <circle cx="7.5" cy="8" r="5.5" fill="#FFB800"/>
        </g>
        </svg>
        
       Oficina Valencia
      </h4>
      <ul>
       <li>
        C/ Riu Vinalopo, 15-17 Nave C4<br>
        Polígono Industrial FONPOR<br>
        46930-Quart De Poblet (Valencia)
       </li>
       <li><a href="tel: 963953815">Tel: 96 395 38 15</a></li>
       <li><a href="fax: 963953429">Fax: 96 395 34 29</a></li>
      </ul>
     </div>
     <div class="contact-us-details_item">
      <h4>
       <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g opacity="0.5">
        <circle cx="7.5" cy="8" r="7.5" fill="#3F9977"/>
        <circle cx="7.5" cy="8" r="7.5" fill="#A6006D"/>
        </g>
        <g opacity="0.5">
        <circle cx="9.5" cy="7.47363" r="5.5" fill="#3F9977"/>
        <circle cx="9.5" cy="7.47363" r="5.5" fill="#FF007A"/>
        </g>
        </svg>  
        Redes sociales      
      </h4>
      <ul>
       <li><a href="#">Facebook</a></li>
       <li><a href="#">Instagram</a></li>
       <li><a href="#">Linkedin</a></li>
       <li><a href="#">Whatsapp</a></li>
      </ul>
     </div>
    </div>
   </div>
  </section>

 <section class="contact-form">
  <div class="container">
   <h3>Solicitar información</h3>
   <form action="#">
    <div class="row">

     <div class="input-wrapper">
      <label for="name">Nombre completo</label>
      <input id="name" type="text" required>
     </div>

     <div class="input-wrapper">
      <label for="number">Teléfono</label>
      <input id="number" type="number" required>
     </div>

    </div>

    <div class="row">

     <div class="input-wrapper">
      <label for="empresa">Empresa </label>
      <input id="empresa" type="text" required>
     </div>

     <div class="input-wrapper">
      <label for="email">
       Email
      </label>
      <input id="email" type="text" required>
     </div>

    </div>

    <div class="row textarea-wrapper">

     <div class="input-wrapper">
      <label for="message">Mensaje</label>
      <textarea id="message" rows="8"></textarea>
     </div>

    </div>
   <div class="form-button-wrp">
    <div class="checkbox-form">
     <input type="checkbox">
     <p>He leido y acepto la <a href="#">LOPD</a></p>
    </div>
    <button>
     Enviar
     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M2 21L23 12L2 3V10L17 12L2 14V21Z" fill="black"/>
      </svg>      
    </button>
   </div>
   </form>
  </div>
 </section>
  </main>







  <section class="companies">
   <div class="container">
     <div class="companies-wrapper">
       <img src="img/certificado_gestiona_verde 1.png" alt="certificado gestiona verde">
       <img src="img/certificado-sico 2.png" alt="certificado sico">
       <img src="img/certificado-sico 3.png" alt="certificado sico">
     </div>
   </div>
 </section>

</main>


<?php 
    include_once('footer.php');
  ?>
