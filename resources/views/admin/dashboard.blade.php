<!DOCTYPE html>
<html class="dash-html" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite(['resources/js/app.js'])
    <title>SHARK</title>
</head>

<body class="dash-body">

    <!-- Sidebar -->
    <div class="dash-sidebar">
        <a href="#" class="dash-a logo">
            <div class="logo-name logo-text"><span>SH</span>ARK</div>
        </a>
        <ul class="side-menu">
            <li class="dash-li"><a class="dash-a" href="#"><i class='dash-bx bx bxs-dashboard'></i>Dashboard</a></li>
            <li class="dash-li"><a class="dash-a" href="#"><i class='dash-bx bx bx-store-alt'></i>Shop</a></li>
            <li class="dash-li active"><a class="dash-a" href="#"><i class='dash-bx bx bx-analyse'></i>Analytics</a></li>
            <li class="dash-li"><a class="dash-a" href="#"><i class='dash-bx bx bx-message-square-dots'></i>Tickets</a></li>
            <li class="dash-li"><a class="dash-a" href="#"><i class='dash-bx bx bx-group'></i>Users</a></li>
            <li class="dash-li"><a class="dash-a" href="#"><i class='dash-bx bx bx-cog'></i>Settings</a></li>
        </ul>
        <ul class="side-menu">
            <li class="dash-li">
                <form class="inline" method="POST" action="/logout">
                    <div>
                        @csrf
                        <button class="logout" type="submit">
                            <i class="dash-bx bx bx-log-out-circle"></i>
                            Logout
                        </button>
                    </div>
                </form>
            </li>
        </ul>
    </div>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="dash-content">
        <!-- Navbar -->
        <nav>
            <i class='dash-bx bx bx-menu'></i>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button class="search-btn" type="submit"><i class='dash-bx bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="theme-toggle" hidden>
            <label for="theme-toggle" class="theme-toggle"></label>
            <a href="#" class="dash-a notif">
                <i class='dash-bx bx bx-bell'></i>
                <span class="count">12</span>
            </a>
            <a href="#" class="profile">
                <img src="images/logosolito.png">
            </a>
        </nav>

        <!-- End of Navbar -->
        <div class="dashboard-container">
            <main>

                <div class="header">
                    <div class="left">
                        <h1>Dashboard</h1>
                        <ul class="breadcrumb">
                            <li class="dash-li"><a class="dash-a" href="#">
                                    Analytics
                                </a></li>
                            /
                            <li class="dash-li"><a href="#" class="dash-a active">Shop</a></li>
                        </ul>
                    </div>
                    <a href="#" class="dash-a report">
                        <i class='dash-bx bx bx-cloud-download'></i>
                        <span>Download CSV</span>
                    </a>
                </div>

                <!-- Insights -->
                <ul class="insights">
                    <li class="dash-li">
                        <i class='dash-bx bx bx-calendar-check'></i>
                        <span class="info">
                            <h3>
                                1,074
                            </h3>
                            <p>Paid Order</p>
                        </span>
                    </li>
                    <li class="dash-li"><i class='dash-bx bx bx-show-alt'></i>
                        <span class="info">
                            <h3>
                                3,944
                            </h3>
                            <p>Site Visit</p>
                        </span>
                    </li>
                    <li class="dash-li"><i class='dash-bx bx bx-line-chart'></i>
                        <span class="info">
                            <h3>
                                14,721
                            </h3>
                            <p>Searches</p>
                        </span>
                    </li>
                    <li class="dash-li"><i class='dash-bx bx bx-dollar-circle'></i>
                        <span class="info">
                            <h3>
                                $6,742
                            </h3>
                            <p>Total Sales</p>
                        </span>
                    </li>
                </ul>
                <!-- End of Insights -->

                <div class="bottom-data">
                    <div class="orders">
                        <div class="header">
                            <i class='dash-bx bx bx-receipt'></i>
                            <h3>Recent Orders</h3>
                            <i class='dash-bx bx bx-filter'></i>
                            <i class='dash-bx bx bx-search'></i>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Order Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="images/profile-1.jpg">
                                        <p>John Doe</p>
                                    </td>
                                    <td>14-08-2023</td>
                                    <td><span class="status completed">Completed</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="images/profile-1.jpg">
                                        <p>John Doe</p>
                                    </td>
                                    <td>14-08-2023</td>
                                    <td><span class="status pending">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="images/profile-1.jpg">
                                        <p>John Doe</p>
                                    </td>
                                    <td>14-08-2023</td>
                                    <td><span class="status process">Processing</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Reminders -->
                    <div class="reminders">
                        <div class="header">
                            <i class='dash-bx bx bx-note'></i>
                            <h3>Remiders</h3>
                            <i class='dash-bx bx bx-filter'></i>
                            <i class='dash-bx bx bx-plus'></i>
                        </div>
                        <ul class="task-list">
                            <li class="dash-li completed">
                                <div class="task-title">
                                    <i class='dash-bx bx bx-check-circle'></i>
                                    <p>Start Our Meeting</p>
                                </div>
                                <i class='dash-bx bx bx-dots-vertical-rounded'></i>
                            </li>
                            <li class="dash-li completed">
                                <div class="task-title">
                                    <i class='dash-bx bx bx-check-circle'></i>
                                    <p>Analyse Our Site</p>
                                </div>
                                <i class='dash-bx bx bx-dots-vertical-rounded'></i>
                            </li>
                            <li class="dash-li not-completed">
                                <div class="task-title">
                                    <i class='bx bx bx-x-circle'></i>
                                    <p>Play Footbal</p>
                                </div>
                                <i class='dash-bx bx bx-dots-vertical-rounded'></i>
                            </li>
                        </ul>
                    </div>
                    <!-- End of Reminders-->
                </div>
            </main>
        </div>
    </div>

    <script src="dashboard.js"></script>
</body>

</html>