<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title><?php echo $title; ?></title>

   <!-- My CSS -->
   <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

   <link rel="stylesheet" href="<?= base_url('assets/css/sign-up.css') ?>">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <!-- Fonts -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


<body>
   <div class="app">
      <header>

         <!-- Navbar -->

         <nav>
            <ul class="main-nav container">
               <li>
                  <img src="<?= base_url('assets/') ?>/img/z8games-logo.png" class="logo">
               </li>
               <li><a class="text-logo" href="#">Z8Games</a></li>
               <li class="nav-item"><a class="link-nav" href="#">Games<i class="icon-drop fas fa-caret-down"></i></a>
                  <ul class="menu-dropdown">
                     <li class="item-dropdown">
                        <a class="dropdown-link-2" href="#">CrossFire
                           <img class="link-logo-menu" src="<?= base_url('assets/') ?>/img/cf_link_image.png">
                        </a></li>
                     <li class="item-dropdown"><a class="dropdown-link-2" href="#">Lost Saga
                           <img class="link-logo-menu" src="<?= base_url('assets/') ?>/img/lsna_link_image.png">
                        </a></li>
                     <li class="item-dropdown"><a class="dropdown-link-2" href="#">Dragon Nest
                           <img class="link-logo-menu" src="<?= base_url('assets/') ?>/img/dnna_link_image.png">
                        </a></li>
                  </ul>
               </li>
               <li class="nav-item"><a class="link-nav" href="#">Support<i class="icon-drop  fas fa-caret-down"></i></a>
                  <ul class="menu-dropdown">
                     <li class="item-dropdown"><a class="dropdown-link" href="#">Forgot your Password?</a></li>
                     <li class="item-dropdown"><a class="dropdown-link" href="#">Purchase ZP</a></li>
                     <li class="item-dropdown"><a class="dropdown-link" href="#">Send Support Ticket</a></li>
                     <li class="item-dropdown"><a class="dropdown-link" href="#">FAQ</a></li>
                  </ul>
               </li>
               <li class="nav-item"><a class="link-nav" href="#">Log in</a></li>
               <li><a class="btn" href="#">Sign Up</a></li>
            </ul>
         </nav>
      </header>