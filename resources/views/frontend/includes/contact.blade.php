<section class="contact py-5" id="contact">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-5 mr-lg-5 col-12">
            <div class="google-map w-100">
              <iframe src="https://maps.google.com/maps?q=bashundhara%20RA&t=&z=13&ie=UTF8&iwloc=&output=embed" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
                <div class="contact-info-item">
                  <h3 class="mb-3 text-white">Say hello</h3>
                  <p class="footer-text mb-0">+88 01735 311153</p>
                  <p><a href="mailto:pial.coder@gmail.com">pial.coder@gmail.com</a></p>
                </div>

                <ul class="social-links">
                     <!-- <li><a href="#" class="uil uil-dribbble" data-toggle="tooltip" data-placement="left" title="Dribbble"></a></li> -->
                     <li><a href="https://www.instagram.com/kugelblitzz/" target="_blank" class="uil uil-instagram" data-toggle="tooltip" data-placement="left" title="Instagram"></a></li>
                     <!-- <li><a href="#" class="uil uil-youtube" data-toggle="tooltip" data-placement="left" title="Youtube"></a></li> -->
                </ul>
            </div>
          </div>

          <div class="col-lg-6 col-12">
            <div class="contact-form">
              <h2 class="mb-4">Interested to work together? Let's talk</h2>

              <div action="" method="get">
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <input type="text" class="form-control" name="name" placeholder="Your Name" id="name" required>
                  </div>

                  <div class="col-lg-6 col-12">
                    <input type="email" class="form-control" name="email" placeholder="Email" id="email" required>
                  </div>

                  <div class="col-12">
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message" required></textarea>
                  </div>

                  <div class="ml-lg-auto col-lg-5 col-12">
                    <input onclick="send()" type="submit" class="form-control submit-btn" value="Send Button">
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
      function send()
        {
      
          let name = document.getElementById('name').value;
          let email = document.getElementById('email').value;
          let feedback = document.getElementById('message').value;
          let message = '';
          if(name=='') message='Please enter your name.';
          else if(email=='') message='Please enter your email.';
          else if(!isEmail(email))  message='Please enter a valid email address.';
          else if(feedback=='') message = 'Please write some message!';
          
          if(message!='')
          {
            Swal.fire({
              position: 'bottom-end',
              icon: 'error',
              title: message,
              showConfirmButton: false,
              timer: 1500
            })
            return;
          }

            const headers = {
              'Content-Type': 'application/json',
              'Accept' : 'application/json'
            }

            let data = {
              name: name,
              email: email,
              message: feedback
            }

            axios.post(`{{env('APP_URL')}}` + '/api/feedback', data, {
                headers: headers
              })
              .then((response) => {
                console.log(response)
                Swal.fire({
                  position: 'bottom-end',
                  icon: 'success',
                  title: 'Thanks for your feedback!',
                  showConfirmButton: false,
                  timer: 2000
                });
                document.getElementById('name').value = '';
                document.getElementById('email').value = '';
                document.getElementById('message').value = '';


              })
              .catch((error) => {
                
              });
     }

     function isEmail(emailAdress){
    let regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

      if (emailAdress.match(regex)) 
        return true; 

      else 
        return false; 
    }

    </script>