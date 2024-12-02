<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pathway USA: Secure Panel</title>
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../admin/js/select2/css/select2.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./images/fav-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css" />
    <!-- <base href="http://arif/pathwayusa/admin/"> -->
    <!-- <base href="http://myshowcase.info/pathwayusa/admin/"> -->
</head>

<body>
    <main class="container-fluid">
        <div class="dashboard-container">
            <!-- Sidebar -->
            <div class="left py-3">

                <div class="logo">
                    <a href="./index.php">
                        <img src="./images/logo.png" alt="Logo">
                    </a>
                </div>
                <nav>
                    <div class="page-info">
                        <ul class="menu nav-sidebar" id="menu-bar">


                            <li class="nav-item">
                                <a data-bs-toggle="collapse" href="#product" role="button" aria-expanded="false" aria-controls="product" class="nav-link d-flex align-items-center justify-content-between">
                                    <div class="left-text d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="18" height="18" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

                                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                                <path d="M1055 5106 c-72 -32 -95 -85 -95 -218 l0 -88 -227 0 c-257 0 -321 -9 -429 -62 -92 -44 -197 -149 -241 -239 -67 -136 -63 1 -63 -2100 0 -1869 0 -1907 20 -1983 25 -101 69 -176 144 -252 76 -75 151 -119 252 -144 76 -20 115 -20 2144 -20 2026 0 2068 0 2144 20 105 26 168 63 247 140 80 79 123 153 149 256 20 76 20 114 20 1983 0 2101 4 1964 -63 2100 -43 89 -149 195 -240 239 -107 52 -172 62 -428 62 l-227 0 -4 109 c-3 91 -7 115 -24 137 -70 94 -190 96 -251 5 -20 -30 -23 -46 -23 -142 l0 -109 -335 0 -335 0 0 100 c0 117 -13 156 -61 191 -45 32 -125 33 -165 3 -60 -44 -69 -67 -72 -185 l-4 -109 -328 0 -328 0 -4 109 c-3 118 -12 141 -72 185 -40 30 -120 29 -165 -3 -48 -35 -61 -74 -61 -191 l0 -100 -335 0 -335 0 0 109 c0 96 -3 112 -23 142 -40 61 -117 84 -182 55z m-93 -713 c4 -124 18 -158 78 -192 72 -40 158 -18 200 51 17 28 20 51 20 141 l0 107 335 0 335 0 0 -107 c0 -90 3 -113 20 -141 61 -100 204 -95 258 8 18 37 22 60 22 142 l0 98 330 0 330 0 0 -98 c0 -82 4 -105 23 -142 53 -103 196 -108 257 -8 17 28 20 51 20 141 l0 107 335 0 335 0 0 -107 c0 -122 13 -156 72 -194 41 -25 122 -22 160 7 50 37 62 71 66 187 l4 108 237 -3 236 -3 53 -30 c56 -30 100 -83 120 -144 8 -22 12 -116 12 -262 l0 -229 -2260 0 -2260 0 0 229 c0 148 4 240 12 262 17 51 54 101 93 128 68 46 97 50 331 51 l222 0 4 -107z m3858 -2371 c0 -1695 6 -1564 -76 -1646 -82 -83 113 -76 -2184 -76 -2297 0 -2102 -7 -2184 76 -82 82 -76 -49 -76 1646 l0 1508 2260 0 2260 0 0 -1508z" />
                                                <path d="M800 3008 c-18 -13 -43 -36 -54 -51 -20 -28 -21 -39 -21 -397 0 -358 1 -369 21 -397 11 -15 36 -38 54 -50 33 -23 36 -23 395 -23 359 0 362 0 395 23 18 12 43 35 54 50 20 28 21 39 21 397 0 358 -1 369 -21 397 -11 15 -36 38 -54 51 -33 22 -36 22 -395 22 -359 0 -362 0 -395 -22z m570 -448 l0 -170 -175 0 -175 0 0 170 0 170 175 0 175 0 0 -170z" />
                                                <path d="M3530 3008 c-18 -13 -43 -36 -54 -51 -20 -28 -21 -39 -21 -397 0 -358 1 -369 21 -397 11 -15 36 -38 54 -50 33 -23 36 -23 395 -23 359 0 362 0 395 23 18 12 43 35 54 50 20 28 21 39 21 397 0 358 -1 369 -21 397 -11 15 -36 38 -54 51 -33 22 -36 22 -395 22 -359 0 -362 0 -395 -22z m570 -448 l0 -170 -175 0 -175 0 0 170 0 170 175 0 175 0 0 -170z" />
                                                <path d="M2855 2930 c-18 -6 -102 -82 -217 -197 l-188 -188 -67 67 c-38 36 -82 73 -100 82 -118 59 -250 -65 -202 -191 5 -15 69 -87 142 -160 151 -153 188 -175 260 -154 35 11 84 54 291 259 136 136 254 261 262 279 50 115 -62 240 -181 203z" />
                                                <path d="M827 1736 c-50 -18 -67 -34 -88 -81 -17 -36 -19 -73 -19 -380 0 -334 0 -342 23 -385 16 -33 34 -51 67 -67 43 -23 52 -23 385 -23 334 0 342 0 385 23 26 13 53 36 65 57 19 33 20 52 20 395 0 344 -1 362 -20 395 -12 19 -36 43 -55 55 -33 19 -53 20 -380 22 -271 2 -353 0 -383 -11z m538 -461 l0 -170 -170 0 -170 0 -3 160 c-1 87 0 165 3 172 3 11 41 13 172 11 l168 -3 0 -170z" />
                                                <path d="M2196 1740 c-16 -5 -40 -19 -53 -32 -53 -49 -53 -51 -53 -436 0 -356 0 -359 23 -392 12 -18 35 -43 50 -54 28 -20 39 -21 397 -21 358 0 369 1 397 21 15 11 38 36 51 54 22 33 22 36 22 395 0 359 0 362 -22 395 -13 18 -36 43 -51 54 -27 20 -40 21 -380 23 -194 1 -365 -2 -381 -7z m534 -465 l0 -175 -170 0 -170 0 0 175 0 175 170 0 170 0 0 -175z" />
                                                <path d="M3555 1735 c-49 -18 -81 -53 -95 -106 -7 -26 -10 -157 -8 -377 3 -385 4 -387 88 -429 43 -23 51 -23 385 -23 333 0 342 0 385 23 33 16 51 34 68 67 22 43 22 52 22 385 0 503 33 469 -460 472 -280 2 -353 0 -385 -12z m540 -460 l0 -170 -170 0 -170 0 -3 160 c-1 87 0 165 3 172 3 11 41 13 172 11 l168 -3 0 -170z" />
                                            </g>
                                        </svg> <span>Product Managment</span>
                                    </div>
                                    <div class="arrow">
                                        <i class="lni lni-chevron-right"></i>
                                    </div>
                                </a>

                                <ul class="sub-menu collapse" id="product">
                                    <li>
                                        <a href="product.php">Products</a>
                                    </li>
                                    <li>
                                        <a href="product.php">Sold Product</a>
                                    </li>
                                    <li>
                                        <a href="product.php">Block Product</a>
                                    </li>
                                    <li>
                                        <a href="waiting-for-approval.php">Waiting for Approval (1)</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a data-bs-toggle="collapse" href="#deliverypersonnel" role="button" aria-expanded="false" aria-controls="deliverypersonnel" class="nav-link d-flex align-items-center justify-content-between">
                                    <div class="left-text d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="18" height="18" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

                                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                                <path d="M1055 5106 c-72 -32 -95 -85 -95 -218 l0 -88 -227 0 c-257 0 -321 -9 -429 -62 -92 -44 -197 -149 -241 -239 -67 -136 -63 1 -63 -2100 0 -1869 0 -1907 20 -1983 25 -101 69 -176 144 -252 76 -75 151 -119 252 -144 76 -20 115 -20 2144 -20 2026 0 2068 0 2144 20 105 26 168 63 247 140 80 79 123 153 149 256 20 76 20 114 20 1983 0 2101 4 1964 -63 2100 -43 89 -149 195 -240 239 -107 52 -172 62 -428 62 l-227 0 -4 109 c-3 91 -7 115 -24 137 -70 94 -190 96 -251 5 -20 -30 -23 -46 -23 -142 l0 -109 -335 0 -335 0 0 100 c0 117 -13 156 -61 191 -45 32 -125 33 -165 3 -60 -44 -69 -67 -72 -185 l-4 -109 -328 0 -328 0 -4 109 c-3 118 -12 141 -72 185 -40 30 -120 29 -165 -3 -48 -35 -61 -74 -61 -191 l0 -100 -335 0 -335 0 0 109 c0 96 -3 112 -23 142 -40 61 -117 84 -182 55z m-93 -713 c4 -124 18 -158 78 -192 72 -40 158 -18 200 51 17 28 20 51 20 141 l0 107 335 0 335 0 0 -107 c0 -90 3 -113 20 -141 61 -100 204 -95 258 8 18 37 22 60 22 142 l0 98 330 0 330 0 0 -98 c0 -82 4 -105 23 -142 53 -103 196 -108 257 -8 17 28 20 51 20 141 l0 107 335 0 335 0 0 -107 c0 -122 13 -156 72 -194 41 -25 122 -22 160 7 50 37 62 71 66 187 l4 108 237 -3 236 -3 53 -30 c56 -30 100 -83 120 -144 8 -22 12 -116 12 -262 l0 -229 -2260 0 -2260 0 0 229 c0 148 4 240 12 262 17 51 54 101 93 128 68 46 97 50 331 51 l222 0 4 -107z m3858 -2371 c0 -1695 6 -1564 -76 -1646 -82 -83 113 -76 -2184 -76 -2297 0 -2102 -7 -2184 76 -82 82 -76 -49 -76 1646 l0 1508 2260 0 2260 0 0 -1508z" />
                                                <path d="M800 3008 c-18 -13 -43 -36 -54 -51 -20 -28 -21 -39 -21 -397 0 -358 1 -369 21 -397 11 -15 36 -38 54 -50 33 -23 36 -23 395 -23 359 0 362 0 395 23 18 12 43 35 54 50 20 28 21 39 21 397 0 358 -1 369 -21 397 -11 15 -36 38 -54 51 -33 22 -36 22 -395 22 -359 0 -362 0 -395 -22z m570 -448 l0 -170 -175 0 -175 0 0 170 0 170 175 0 175 0 0 -170z" />
                                                <path d="M3530 3008 c-18 -13 -43 -36 -54 -51 -20 -28 -21 -39 -21 -397 0 -358 1 -369 21 -397 11 -15 36 -38 54 -50 33 -23 36 -23 395 -23 359 0 362 0 395 23 18 12 43 35 54 50 20 28 21 39 21 397 0 358 -1 369 -21 397 -11 15 -36 38 -54 51 -33 22 -36 22 -395 22 -359 0 -362 0 -395 -22z m570 -448 l0 -170 -175 0 -175 0 0 170 0 170 175 0 175 0 0 -170z" />
                                                <path d="M2855 2930 c-18 -6 -102 -82 -217 -197 l-188 -188 -67 67 c-38 36 -82 73 -100 82 -118 59 -250 -65 -202 -191 5 -15 69 -87 142 -160 151 -153 188 -175 260 -154 35 11 84 54 291 259 136 136 254 261 262 279 50 115 -62 240 -181 203z" />
                                                <path d="M827 1736 c-50 -18 -67 -34 -88 -81 -17 -36 -19 -73 -19 -380 0 -334 0 -342 23 -385 16 -33 34 -51 67 -67 43 -23 52 -23 385 -23 334 0 342 0 385 23 26 13 53 36 65 57 19 33 20 52 20 395 0 344 -1 362 -20 395 -12 19 -36 43 -55 55 -33 19 -53 20 -380 22 -271 2 -353 0 -383 -11z m538 -461 l0 -170 -170 0 -170 0 -3 160 c-1 87 0 165 3 172 3 11 41 13 172 11 l168 -3 0 -170z" />
                                                <path d="M2196 1740 c-16 -5 -40 -19 -53 -32 -53 -49 -53 -51 -53 -436 0 -356 0 -359 23 -392 12 -18 35 -43 50 -54 28 -20 39 -21 397 -21 358 0 369 1 397 21 15 11 38 36 51 54 22 33 22 36 22 395 0 359 0 362 -22 395 -13 18 -36 43 -51 54 -27 20 -40 21 -380 23 -194 1 -365 -2 -381 -7z m534 -465 l0 -175 -170 0 -170 0 0 175 0 175 170 0 170 0 0 -175z" />
                                                <path d="M3555 1735 c-49 -18 -81 -53 -95 -106 -7 -26 -10 -157 -8 -377 3 -385 4 -387 88 -429 43 -23 51 -23 385 -23 333 0 342 0 385 23 33 16 51 34 68 67 22 43 22 52 22 385 0 503 33 469 -460 472 -280 2 -353 0 -385 -12z m540 -460 l0 -170 -170 0 -170 0 -3 160 c-1 87 0 165 3 172 3 11 41 13 172 11 l168 -3 0 -170z" />
                                            </g>
                                        </svg> <span>Delivery Personnel</span>
                                    </div>
                                    <div class="arrow">
                                        <i class="lni lni-chevron-right"></i>
                                    </div>
                                </a>

                                <ul class="sub-menu collapse" id="deliverypersonnel">
                                    <li>
                                        <a href="delivery-personnel.php">List</a>
                                    </li>
                                    <li>
                                        <a href="waiting-for-approval.php">Waiting for Approval (1)</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
            <div class="spanSidebar">
                <i class="fa-solid fa-angle-left"></i>
            </div>
            <div class="right">
                <!-- Top Header -->
                <header class="dashboard_header py-3">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">

                        </div>
                        <div class="col-auto right_header d-flex align-items-center justify-content-end">
                            <div class="me-3 position-relative badge_container">
                                <i class="fa-regular fa-bell"></i>
                                <div class="position-absolute translate-middle  rounded-circle">
                                    <p class="noti_count d-flex align-items-center justify-content-center visually-visible text-white">
                                        6</p>
                                </div>
                            </div>
                            <div>
                                <a href="./setting.php"><i class="fa-solid fa-gear"></i></a>
                            </div>

                            <div class="ms-3 d-flex align-items-center user_info">
                                <div class=" d-flex align-items-center" dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true">
                                    <img src="./images/user.jpg" alt="user">
                                    <div class="ps-2 pe-3">
                                        <strong>Json Taylor</strong>
                                    </div>
                                </div>
                                <ul class="dropdown-menu py-0" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 39px);">
                                    <li><a href="update-profile.php" class="dropdown-item">Update Profile
                                        </a></li>
                                    <li><a href="cancellation-policy.php" class="dropdown-item">Cancellation Policy
                                        </a></li>
                                    <li><a href="change-password.php" class="dropdown-item">Change Password
                                        </a></li>
                                    <li><a href="#" class="dropdown-item">Logout
                                        </a></li>

                                </ul>
                            </div>



                        </div>
                    </div>
                </header>