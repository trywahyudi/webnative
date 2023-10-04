<body>
<section id="contact"> 
      <div class="container"> 
        <div class="row text-center"> 
          <div class="col"> 
            <h2 class="text">Contact Me</h2> 
          </div> 
        </div> 
        <div class="row justify-content-center mb-3"> 
          <div class="col-md-8"> 
            <div 
              class=" 
                alert alert-success alert-dismissible 
                fade 
                show 
                d-none 
                my-alert 
              " 
              role="alert" 
            > 
              <strong>Terimakasih!</strong> Pesan anda sudah kami terima. 
              <button 
                type="button" 
                class="btn-close" 
                data-bs-dismiss="alert" 
                aria-label="Close" 
              ></button> 
            </div> 
            <form name="try-wahyudi-form"> 
              <div class="mb-3"> 
                <label for="name" class="form-label">Full Name</label> 
                <input 
                  type="text" 
                  class="form-control" 
                  placeholder="Full Name" 
                  aria-describedby="name" 
                  name="nama" 
                /> 
              </div> 
              <div class="mb-3"> 
                <label for="email" class="form-label">Email</label> 
                <input 
                  type="email" 
                  class="form-control" 
                  placeholder="@example.com" 
                  aria-describedby="email" 
                  name="email" 
                /> 
              </div> 
              <div class="mb-3"> 
                <label for="pesan" class="form-label">Message</label> 
                <textarea 
                  class="form-control" 
                  placeholder="Berikan pesan anda kepada saya" 
                  rows="3" 
                  name="pesan" 
                ></textarea> 
              </div> 
              <button type="submit" class="btn btn-primary btn-kirim"> 
                Send 
              </button> 
              <button 
                class="btn btn-primary btn-loading d-none" 
                type="button" 
                disabled 
              > 
                <span 
                  class="spinner-border spinner-border-sm" 
                  role="status" 
                  aria-hidden="true" 
                ></span> 
                Loading... 
              </button> 
            </form> 
          </div> 
        </div> 
      </div> 
    </section>
</body>