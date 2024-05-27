<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="dev_raj" />
    <!-- ======== Page title ============ -->
    <title>ghfh</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <meta name="description" content="Call Analog" />
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="../../assets/img/solar/favicon.png" />
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <!-- template main style css file -->
    <link rel="stylesheet" href="../custom.css" />
    <link rel="stylesheet" href="../assets/css/dashboard.css" />
    <link rel="stylesheet" href="../header.css" />
    <link rel="stylesheet" href="../responsive.css" />
</head>

<body class="body-wrapper bg4">
    <?php
    include "./header.php";
    ?>
    <style>
        .main-users-box-arc {
            background-color: #ffffff;
            border-radius: 4px;
            padding: 16px;
        }

        .graph-box-arc {
            background-color: #ffffff;
            border-radius: 4px;
            padding: 16px;
            margin-top: 10px;
        }

        .tab-content {
            display: none;
        }

        .tab-content.current {
            display: block;
        }
    </style>

    <section class="main-dashboard">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-1 col-2">
                    <div class="main-icons-box">
                        <a href="dashboard.php"><img src="../assets/img/image/was.png" class="icon icon1" style="background-color: #105A71;" /></a>
                        <a href="user-based.php"><img src="../assets/img/image/embl.png" class="icon icon2" /></a>
                        <a href="javascript:void(0);"><img src="../assets/img/image/blad.png" class="icon icon3" /></a>
                        <a href="javascript:void(0);"><img src="../assets/img/image/Logout.png" class="icon icon3" /></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                    <div class="main-dashboard-content-box">
                        <div class="flex-main-data">
                            <div class="main-box">
                                <div class="total-user-box">
                                    <p class="color19 fpw6 fs14 ln20">Total no. of users</p>
                                    <h3 class="color20 fpw4">234500</h3>
                                </div>

                                <div class="graph-box-new-uild">
                                    <div class="content-new active" id="tabContentNewUild1">
                                        <canvas id="myChartNeUild"></canvas>
                                    </div>
                                    <div class="content-new" id="tabContentNewUild2">
                                        <canvas id="myChartNewMonthUild"></canvas>
                                    </div>
                                    <div class="content-new" id="tabContentNewUild3">
                                        <canvas id="myChartNewYearUild"></canvas>
                                    </div>

                                    <div class="tabs-new">
                                        <div class="tab-new" onclick="changeTabNewUild(1)">
                                            <span><img src="../assets/img/image/calendar.png" /></span> &nbsp; Days
                                        </div>
                                        <div class="tab-new" onclick="changeTabNewUild(2)">
                                            <span><img src="../assets/img/image/calendar.png" /></span> &nbsp; Months: Jan - Jul
                                        </div>
                                        <div class="tab-new" onclick="changeTabNewUild(3)">
                                            <span><img src="../assets/img/image/calendar.png" /></span> &nbsp; Years
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-box">
                                <div class="total-user-box">
                                    <p class="color19 fpw6 fs14 ln20">Total time spent (mins.) </p>
                                    <h3 class="color20 fpw4">25000</h3>
                                </div>
                                <div class="graph-box-new"> <!-- Changed class name here -->
                                    <div class="content-new active" id="tabContentNew1"> <!-- Changed class name here -->
                                        <canvas id="myChartNew"></canvas>
                                    </div>
                                    <div class="content-new" id="tabContentNew2"> <!-- Changed class name here -->
                                        <canvas id="myChartNewMonth"></canvas>
                                    </div>
                                    <div class="content-new" id="tabContentNew3"> <!-- Changed class name here -->
                                        <canvas id="myChartNewYear"></canvas>
                                    </div>

                                    <div class="tabs-new"> <!-- Changed class name here -->
                                        <div class="tab-new" onclick="changeTabNew(1)"> <!-- Changed class name here -->
                                            <span><img src="../assets/img/image/calendar.png" /></span> &nbsp; Days
                                        </div>
                                        <div class="tab-new" onclick="changeTabNew(2)"> <!-- Changed class name here -->
                                            <span><img src="../assets/img/image/calendar.png" /></span> &nbsp; Months: Jan - Jul
                                        </div>
                                        <div class="tab-new" onclick="changeTabNew(3)"> <!-- Changed class name here -->
                                            <span><img src="../assets/img/image/calendar.png" /></span> &nbsp; Years
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-box">
                                <div class="total-user-box">
                                    <p class="color19 fpw6 fs14 ln20">Average times spent (mins.)</p>
                                    <h3 class="color20 fpw4">64</h3>
                                </div>
                                <div class="graph-box-new-avts"> <!-- Changed class name here -->
                                    <div class="content-new active" id="tabContentNewAvts1"> <!-- Changed class name here -->
                                        <canvas id="myChartNewAvts"></canvas>
                                    </div>
                                    <div class="content-new" id="tabContentNewAvts2"> <!-- Changed class name here -->
                                        <canvas id="myChartNewMonthAvts"></canvas>
                                    </div>
                                    <div class="content-new" id="tabContentNewAvts3"> <!-- Changed class name here -->
                                        <canvas id="myChartNewYearAvts"></canvas>
                                    </div>

                                    <div class="tabs-new"> <!-- Changed class name here -->
                                        <div class="tab-new" onclick="changeTabNewAvts(1)"> <!-- Changed class name here -->
                                            <span><img src="../assets/img/image/calendar.png" /></span> &nbsp; Days
                                        </div>
                                        <div class="tab-new" onclick="changeTabNewAvts(2)"> <!-- Changed class name here -->
                                            <span><img src="../assets/img/image/calendar.png" /></span> &nbsp; Months: Jan - Jul
                                        </div>
                                        <div class="tab-new" onclick="changeTabNewAvts(3)"> <!-- Changed class name here -->
                                            <span><img src="../assets/img/image/calendar.png" /></span> &nbsp; Years
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-box">
                                <div class="total-user-box">
                                    <p class="color19 fpw6 fs14 ln20">No. of users in last 30 days</p>
                                    <h3 class="color20 fpw4">225</h3>
                                </div>
                            </div>
                            <div class="main-box">
                                <div class="total-user-box">
                                    <p class="color19 fpw6 fs14 ln20">Time spent (mins.) in last 30 days</p>
                                    <h3 class="color20 fpw4">400</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div id="training-employee-box" class="training-employee-box">
                                <div id="tab-option" class="tab-option">
                                    <ul id="tabs" class="tabs">
                                        <li class="tab-link current" id="tab-1" data-tab="tab-1" onclick="changeTab(this)">Training Section</li>
                                        <li class="tab-link" id="tab-2" data-tab="tab-2" onclick="changeTab(this)">Employee Report</li>
                                    </ul>
                                    <div id="tab-1-content" class="tab-content current">
                                        <div class="mb20">
                                            <div class="row">
                                                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 p-1">
                                                    <div class="main-box-tem">
                                                        <div class="total-user-box">
                                                            <p class="color19 fpw6 fs14 ln20">Total no. of participants</p>
                                                            <h3 class="color20 fpw4">19305</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 p-1">
                                                    <div class="main-box-tem">
                                                        <div class="total-user-box">
                                                            <p class="color19 fpw6 fs14 ln20">Time spent (mins.) in training</p>
                                                            <h3 class="color20 fpw4">835240</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 p-1"></div>
                                            </div>
                                        </div>
                                        <!-- 1 -->
                                        <div class="flex-table-heading-box">
                                            <p class="fpw6 color21">Replacement of Manifold</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total training participants:<span class="fpw6"> 19305</span></p>
                                            </div>
                                        </div>

                                        <div class="table-box">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="fpw6">S.no.</th>
                                                        <th class="fpw6">Name of the task</th>
                                                        <th class="fpw6">Avg. time</th>
                                                        <th class="fpw6">Time spent</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">1. </td>
                                                        <td class="wid2" data-label="Due Date">Pick up the spanner</td>
                                                        <td class="wid3" data-label="Amount">4m 23s</td>
                                                        <td class="wid4" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">2. </td>
                                                        <td class="wid2" data-label="Due Date">Unscrew 5mm Bolts</td>
                                                        <td class="wid3" data-label="Amount">6m 34s</td>
                                                        <td class="wid4" data-label="Period">150hr 34m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">3. </td>
                                                        <td class="wid2" data-label="Due Date">Grab the new part</td>
                                                        <td class="wid3" data-label="Amount">1m 23s</td>
                                                        <td class="wid4" data-label="Period">138hr 11m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">4. </td>
                                                        <td class="wid2" data-label="Due Date">Place it correctly</td>
                                                        <td class="wid3" data-label="Amount">5m 59s</td>
                                                        <td class="wid4" data-label="Period">136hr 27m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">5. </td>
                                                        <td class="wid2" data-label="Due Date">Place it correctly, and if the step exceeds the limit of 2 lines the words should wrap with the column remaining the samer</td>
                                                        <td class="wid3" data-label="Amount">10m 11s</td>
                                                        <td class="wid4" data-label="Period">130hr 26m</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- 2  -->
                                        <div class="flex-table-heading-box">
                                            <p class="fpw6 color21">Replacement of Hydro Motord</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total training participants:<span class="fpw6"> 19305</span></p>
                                            </div>
                                        </div>
                                        <div class="table-box">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="fpw6">S.no.</th>
                                                        <th class="fpw6">Name of the task</th>
                                                        <th class="fpw6">Avg. time</th>
                                                        <th class="fpw6">Time spent</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">1. </td>
                                                        <td class="wid2" data-label="Due Date">Pick up the spanner</td>
                                                        <td class="wid3" data-label="Amount">4m 23s</td>
                                                        <td class="wid4" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">2. </td>
                                                        <td class="wid2" data-label="Due Date">Unscrew 5mm Bolts</td>
                                                        <td class="wid3" data-label="Amount">6m 34s</td>
                                                        <td class="wid4" data-label="Period">150hr 34m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">3. </td>
                                                        <td class="wid2" data-label="Due Date">Grab the new part</td>
                                                        <td class="wid3" data-label="Amount">1m 23s</td>
                                                        <td class="wid4" data-label="Period">138hr 11m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">4. </td>
                                                        <td class="wid2" data-label="Due Date">Place it correctly</td>
                                                        <td class="wid3" data-label="Amount">5m 59s</td>
                                                        <td class="wid4" data-label="Period">136hr 27m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">5. </td>
                                                        <td class="wid2" data-label="Due Date">Place it correctly, and if the step exceeds the limit of 2 lines the words should wrap with the column remaining the samer</td>
                                                        <td class="wid3" data-label="Amount">10m 11s</td>
                                                        <td class="wid4" data-label="Period">130hr 26m</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div id="tab-2-content" class="tab-content">
                                        <div class="mb20">
                                            <div class="row">
                                                <div class="col-lg-4 p-1">
                                                    <div class="main-box-tem">
                                                        <div class="total-user-box">
                                                            <p class="color19 fpw6 fs14 ln20">Training participants count</p>
                                                            <h3 class="color20 fpw4">19305</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 p-1">
                                                    <div class="main-box-tem">
                                                        <div class="total-user-box">
                                                            <p class="color19 fpw6 fs14 ln20">Compled count</p>
                                                            <h3 class="color20 fpw4">1670</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 p-1">
                                                    <div class="main-box-tem">
                                                        <div class="total-user-box">
                                                            <p class="color19 fpw6 fs14 ln20">Incompleted count</p>
                                                            <h3 class="color20 fpw4">1670</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table-box">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="fpw6">S.no.</th>
                                                        <th class="fpw6">Name of user</th>
                                                        <th class="fpw6">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">1. </td>
                                                        <td class="wid2" data-label="Due Date">Ralph Edwards</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="../assets/img/image/circle.png" /></span> &nbsp; Completed</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">3. </td>
                                                        <td class="wid2" data-label="Due Date">Cameron Williamson</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="../assets/img/image/circle.png" /></span> &nbsp; Completed</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">3. </td>
                                                        <td class="wid2" data-label="Due Date">Bessie Cooper</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="../assets/img/image/red-circle.png" /></span> &nbsp; Incomplete</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">4. </td>
                                                        <td class="wid2" data-label="Due Date">Ronald Richards</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="../assets/img/image/circle.png" /></span> &nbsp; Completed</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">5. </td>
                                                        <td class="wid2" data-label="Due Date">Darrell Steward</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="../assets/img/image/circle.png" /></span> &nbsp; Completed</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">6. </td>
                                                        <td class="wid2" data-label="Due Date">Cameron Williamson</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="../assets/img/image/circle.png" /></span> &nbsp; Completed</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">7. </td>
                                                        <td class="wid2" data-label="Due Date">Bessie Cooper</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="../assets/img/image/red-circle.png" /></span> &nbsp; Incomplete</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">8. </td>
                                                        <td class="wid2" data-label="Due Date">Ronald Richards</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="../assets/img/image/circle.png" /></span> &nbsp; Completed</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="tab-parent">
                                <div class="tab-container">
                                    <div class="tabs">
                                        <button class="tab-btn active" data-tab="tab1">Quiz Section</button>
                                        <button class="tab-btn" data-tab="tab2">Employee Report</button>
                                    </div>
                                    <div class="tab-content active" id="tab1">
                                        <div class="mb20">
                                            <div class="row">
                                                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 p-1">
                                                    <div class="main-box-assessment">
                                                        <div class="total-user-box">
                                                            <p class="color19 fpw6 fs14 ln20">Total no. of participants</p>
                                                            <h3 class="color20 fpw4">19305</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 p-1">
                                                    <div class="main-box-assessment">
                                                        <div class="total-user-box">
                                                            <p class="color19 fpw6 fs14 ln20">Total no. of participants</p>
                                                            <h3 class="color20 fpw4">19305</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 p-1"></div>
                                            </div>
                                        </div>

                                         <!-- 1 -->
                                         <div class="flex-table-heading-box">
                                            <p class="fpw6 color21">Replacement of Manifold</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total training participants:<span class="fpw6"> 19305</span></p>
                                            </div>
                                        </div>

                                        <div class="table-box">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="fpw6">S.no.</th>
                                                        <th class="fpw6">Name of the task</th>
                                                        <th class="fpw6">Avg. time</th>
                                                        <th class="fpw6">Time spent</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">1. </td>
                                                        <td class="wid2" data-label="Due Date">Pick up the spanner</td>
                                                        <td class="wid3" data-label="Amount">4m 23s</td>
                                                        <td class="wid4" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">2. </td>
                                                        <td class="wid2" data-label="Due Date">Unscrew 5mm Bolts</td>
                                                        <td class="wid3" data-label="Amount">6m 34s</td>
                                                        <td class="wid4" data-label="Period">150hr 34m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">3. </td>
                                                        <td class="wid2" data-label="Due Date">Grab the new part</td>
                                                        <td class="wid3" data-label="Amount">1m 23s</td>
                                                        <td class="wid4" data-label="Period">138hr 11m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">4. </td>
                                                        <td class="wid2" data-label="Due Date">Place it correctly</td>
                                                        <td class="wid3" data-label="Amount">5m 59s</td>
                                                        <td class="wid4" data-label="Period">136hr 27m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">5. </td>
                                                        <td class="wid2" data-label="Due Date">Place it correctly, and if the step exceeds the limit of 2 lines the words should wrap with the column remaining the samer</td>
                                                        <td class="wid3" data-label="Amount">10m 11s</td>
                                                        <td class="wid4" data-label="Period">130hr 26m</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- 2  -->
                                        <div class="flex-table-heading-box">
                                            <p class="fpw6 color21">Replacement of Hydro Motord</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total training participants:<span class="fpw6"> 19305</span></p>
                                            </div>
                                        </div>
                                        <div class="table-box">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="fpw6">S.no.</th>
                                                        <th class="fpw6">Name of the task</th>
                                                        <th class="fpw6">Avg. time</th>
                                                        <th class="fpw6">Time spent</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">1. </td>
                                                        <td class="wid2" data-label="Due Date">Pick up the spanner</td>
                                                        <td class="wid3" data-label="Amount">4m 23s</td>
                                                        <td class="wid4" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">2. </td>
                                                        <td class="wid2" data-label="Due Date">Unscrew 5mm Bolts</td>
                                                        <td class="wid3" data-label="Amount">6m 34s</td>
                                                        <td class="wid4" data-label="Period">150hr 34m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">3. </td>
                                                        <td class="wid2" data-label="Due Date">Grab the new part</td>
                                                        <td class="wid3" data-label="Amount">1m 23s</td>
                                                        <td class="wid4" data-label="Period">138hr 11m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">4. </td>
                                                        <td class="wid2" data-label="Due Date">Place it correctly</td>
                                                        <td class="wid3" data-label="Amount">5m 59s</td>
                                                        <td class="wid4" data-label="Period">136hr 27m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">5. </td>
                                                        <td class="wid2" data-label="Due Date">Place it correctly, and if the step exceeds the limit of 2 lines the words should wrap with the column remaining the samer</td>
                                                        <td class="wid3" data-label="Amount">10m 11s</td>
                                                        <td class="wid4" data-label="Period">130hr 26m</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- 3 -->
                                        <div class="flex-table-heading-box">
                                            <p class="fpw6 color21">Replacement of Break Assembly</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total training participants:<span class="fpw6"> 19305</span></p>
                                            </div>
                                        </div>
                                        <div class="table-box">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="fpw6">S.no.</th>
                                                        <th class="fpw6">Name of the task</th>
                                                        <th class="fpw6">Avg. time</th>
                                                        <th class="fpw6">Time spent</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">1. </td>
                                                        <td class="wid2" data-label="Due Date">Pick up the spanner</td>
                                                        <td class="wid3" data-label="Amount">4m 23s</td>
                                                        <td class="wid4" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">2. </td>
                                                        <td class="wid2" data-label="Due Date">Unscrew 5mm Bolts</td>
                                                        <td class="wid3" data-label="Amount">6m 34s</td>
                                                        <td class="wid4" data-label="Period">150hr 34m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">3. </td>
                                                        <td class="wid2" data-label="Due Date">Grab the new part</td>
                                                        <td class="wid3" data-label="Amount">1m 23s</td>
                                                        <td class="wid4" data-label="Period">138hr 11m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">4. </td>
                                                        <td class="wid2" data-label="Due Date">Place it correctly</td>
                                                        <td class="wid3" data-label="Amount">5m 59s</td>
                                                        <td class="wid4" data-label="Period">136hr 27m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">5. </td>
                                                        <td class="wid2" data-label="Due Date">Place it correctly, and if the step exceeds the limit of 2 lines the words should wrap with the column remaining the samer</td>
                                                        <td class="wid3" data-label="Amount">10m 11s</td>
                                                        <td class="wid4" data-label="Period">130hr 26m</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- 4  -->
                                        <div class="flex-table-heading-box">
                                            <p class="fpw6 color21">Replacement of Hose</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total training participants:<span class="fpw6"> 19305</span></p>
                                            </div>
                                        </div>
                                        <div class="table-box">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="fpw6">S.no.</th>
                                                        <th class="fpw6">Name of the task</th>
                                                        <th class="fpw6">Avg. time</th>
                                                        <th class="fpw6">Time spent</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">1. </td>
                                                        <td class="wid2" data-label="Due Date">Pick up the spanner</td>
                                                        <td class="wid3" data-label="Amount">4m 23s</td>
                                                        <td class="wid4" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">2. </td>
                                                        <td class="wid2" data-label="Due Date">Unscrew 5mm Bolts</td>
                                                        <td class="wid3" data-label="Amount">6m 34s</td>
                                                        <td class="wid4" data-label="Period">150hr 34m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">3. </td>
                                                        <td class="wid2" data-label="Due Date">Grab the new part</td>
                                                        <td class="wid3" data-label="Amount">1m 23s</td>
                                                        <td class="wid4" data-label="Period">138hr 11m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">4. </td>
                                                        <td class="wid2" data-label="Due Date">Place it correctly</td>
                                                        <td class="wid3" data-label="Amount">5m 59s</td>
                                                        <td class="wid4" data-label="Period">136hr 27m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">5. </td>
                                                        <td class="wid2" data-label="Due Date">Place it correctly, and if the step exceeds the limit of 2 lines the words should wrap with the column remaining the samer</td>
                                                        <td class="wid3" data-label="Amount">10m 11s</td>
                                                        <td class="wid4" data-label="Period">130hr 26m</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- 5  -->
                                        <div class="flex-table-heading-box">
                                            <p class="fpw6 color21">Replacement of Gear Boxe</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total training participants:<span class="fpw6"> 19305</span></p>
                                            </div>
                                        </div>
                                        <div class="table-box">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="fpw6">S.no.</th>
                                                        <th class="fpw6">Name of the task</th>
                                                        <th class="fpw6">Avg. time</th>
                                                        <th class="fpw6">Time spent</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">1. </td>
                                                        <td class="wid2" data-label="Due Date">Pick up the spanner</td>
                                                        <td class="wid3" data-label="Amount">4m 23s</td>
                                                        <td class="wid4" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">2. </td>
                                                        <td class="wid2" data-label="Due Date">Unscrew 5mm Bolts</td>
                                                        <td class="wid3" data-label="Amount">6m 34s</td>
                                                        <td class="wid4" data-label="Period">150hr 34m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">3. </td>
                                                        <td class="wid2" data-label="Due Date">Grab the new part</td>
                                                        <td class="wid3" data-label="Amount">1m 23s</td>
                                                        <td class="wid4" data-label="Period">138hr 11m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">4. </td>
                                                        <td class="wid2" data-label="Due Date">Place it correctly</td>
                                                        <td class="wid3" data-label="Amount">5m 59s</td>
                                                        <td class="wid4" data-label="Period">136hr 27m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">5. </td>
                                                        <td class="wid2" data-label="Due Date">Place it correctly, and if the step exceeds the limit of 2 lines the words should wrap with the column remaining the samer</td>
                                                        <td class="wid3" data-label="Amount">10m 11s</td>
                                                        <td class="wid4" data-label="Period">130hr 26m</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                    <div class="tab-content" id="tab2">
                                        <div class="mb20">
                                            <div class="row">
                                                <div class="col-lg-4 p-1">
                                                    <div class="main-box-tem">
                                                        <div class="total-user-box">
                                                            <p class="color19 fpw6 fs14 ln20">Training participants count</p>
                                                            <h3 class="color20 fpw4">19305</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 p-1">
                                                    <div class="main-box-tem">
                                                        <div class="total-user-box">
                                                            <p class="color19 fpw6 fs14 ln20">Compled count</p>
                                                            <h3 class="color20 fpw4">1670</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 p-1">
                                                    <div class="main-box-tem">
                                                        <div class="total-user-box">
                                                            <p class="color19 fpw6 fs14 ln20">Incompleted count</p>
                                                            <h3 class="color20 fpw4">1670</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table-box">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="fpw6">S.no.</th>
                                                        <th class="fpw6">Name of user</th>
                                                        <th class="fpw6">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">1. </td>
                                                        <td class="wid2" data-label="Due Date">Ralph Edwards</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="../assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">3. </td>
                                                        <td class="wid2" data-label="Due Date">Cameron Williamson</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="../assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">3. </td>
                                                        <td class="wid2" data-label="Due Date">Bessie Cooper</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="../assets/img/image/red-circle.png" /></span> &nbsp; Fail</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">4. </td>
                                                        <td class="wid2" data-label="Due Date">Ronald Richards</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="../assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">5. </td>
                                                        <td class="wid2" data-label="Due Date">Darrell Steward</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="../assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">6. </td>
                                                        <td class="wid2" data-label="Due Date">Cameron Williamson</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="../assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">7. </td>
                                                        <td class="wid2" data-label="Due Date">Bessie Cooper</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="../assets/img/image/red-circle.png" /></span> &nbsp; Fail</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">8. </td>
                                                        <td class="wid2" data-label="Due Date">Ronald Richards</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="../assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-sm-12"></div>
            </div>
        </div>
    </section>

    <?php
    include "footer.php";
    ?>


    <!--  ALl JS Plugins
    ====================================== -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <script src="../assets/js/active.js"></script>
    <script src="./index.js"></script>





</body>

</html>