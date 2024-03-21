<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="/Admin"><img src="/assets/images/logo.svg" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="/Admin"><img src="/assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="/images/my_active.png" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">Ahmad </h5>
              <span>Admin </span>
            </div>
          </div>
          <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-onepassword  text-info"></i>
                </div>
              </div>
              <div class="preview-item-content" onclick="password()">
                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-calendar-today text-success"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
              </div>
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="/Admin">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Clients</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/Admin-Clients">Clients Details</a></li>
            <li class="nav-item"> <a class="nav-link" href="/Register-New-Client">Add New Client </a></li>
          </ul>
        </div>
      </li>


      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#project" aria-expanded="false" aria-controls="project">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Project</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="project">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/Admin-Projects">My Projects</a></li>
            <li class="nav-item"> <a class="nav-link" href="/New-Project">New Project</a></li>
          </ul>
        </div>
      </li>



      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#Tickets" aria-expanded="false" aria-controls="Tickets">
          <span class="menu-icon">
            <i class="mdi mdi-inbox"></i>
          </span>
          <span class="menu-title">Tickets</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="Tickets">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/Admin-Tickets">Tickets </a></li>
            <li class="nav-item"> <a class="nav-link" href="/New-Ticket">New Ticket </a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#Emails" aria-expanded="false" aria-controls="Emails">
          <span class="menu-icon">
            <i class="mdi mdi-mail"></i>
          </span>
          <span class="menu-title">Emails</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="Emails">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/Admin-Mail-Box">Compose Email</a></li>
            <li class="nav-item"> <a class="nav-link" href="/Admin-Mails">All Emails</a></li>
          </ul>
        </div>
      </li>

   
    </ul>
  </nav>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
@if(Session::has('success'))
  toastr.options={
    "closeButton":true,
    "progressBar":true,
  }
  toastr.success("{{session('success')}}")

  @endif

  @if(Session::has('warning'))
  toastr.options={
    "closeButton":true,
    "progressBar":true,
  }
  toastr.warning("{{session('warning')}}")

  @endif

  
  @if(Session::has('info'))
  toastr.options={
    "closeButton":true,
    "progressBar":true,
  }
  toastr.info("{{session('info')}}")
  @endif

</script>


<script> var url = 'https://widget.bot.space/js/widget.js'; var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url; var options = {"enabled":true,"chatButtonSetting":{"backgroundColor":"#13C656","ctaText":"Talk With Us","borderRadius":"25","marginLeft":"20","marginBottom":"20","marginRight":"20","position":"right"},"brandSetting":{"brandName":"Botspace","brandSubTitle":"Typically replies within a day","brandImg":"https://widget.bot.space/images/BotSpaceLogoLight.png","welcomeText":"Hi there! \nHow can I help you?","messageText":"Hello, I have a question.","backgroundColor":"#085E54","ctaText":"Start Chat","borderRadius":"25","autoShow":false,"phoneNumber":"923207231005"}}; s.onload = function() { CreateWhatsappChatWidget(options); }; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x); </script>