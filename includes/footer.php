    <!-- contact section start -->
    <section class="contact <?php if(isset($print)) { echo 'contain';}?>" id="contact">
        <div class="max-width">
            <h2 class="title">Contact Us</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum corporis fuga
                        corrupti. Doloribus quis soluta nesciunt veritatis vitae nobis?</p>
                    <div class="icons">
                        <div class="row">
                            <i class="far fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Dhaval Zalavadiya</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="far fa-map"></i>
                                <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Surkhet, India</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="far fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">dhruvzalavadiya08@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message Us</div>
                    <form action="<?php echo url('feedback.php') ?>" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required name="name">
                            </div>
                            <div class="field mobile">
                                <input type="mobile" placeholder="Mobile" required name="mobile">
                            </div>
                        </div>
                        <div class="field">
                            <input type="email" placeholder="Email" required name="email">
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." required name="message"> </textarea>
                        </div>
                        <div class="button">
                            <button type="submit" name="submit" value="add">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By Dhaval Zalavadiya</span>
    </footer>

    <script src="<?php echo url('js/script.js') ?>"></script>
<?php
  if (isset($_SESSION['alert'])) {
    $message = $_SESSION['alert'];
    unset($_SESSION['alert']);
  ?>
    <script src="<?php echo url('js/sweetalert2.js') ?>"></script>
    <script>
      Swal.fire(
        '<?php echo ($message['title']) ?>',
        '<?php echo ($message['body']) ?>',
        '<?php echo ($message['type']) ?>',
      )
    </script>
  <?php
  }
?>