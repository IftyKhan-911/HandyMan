<?php
session_start();
if (!isset($_SESSION['eID'])) {
    header("location:./employee login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS SCRIPTS/employee_panel/employeeWorkNotificationDesign.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/orkers.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Employee Working Notifications</title>
</head>

<body>
    <!--side-bar-->
    <div class="side-menu">
        <div class="company">
            <h1>HandyMan</h1>
        </div>
        <ul>
            <li><a href="dashboard.php"><img src="../../ICONS/dashboard5.png" alt="dashboard"> &nbsp; Dashboard</a></li>
            <li><a href="employeeProfile.php"><img src="../../ICONS/user.png" alt="profile">&nbsp; Profile</a></li>
            <li><a href="employeeWorkNotifications.php"><img src="../../ICONS/bell.png" alt="notifications"> &nbsp;
                    Working
                    Notification</a></li>
            <!--<li><a href="employeeWorkinprogress.html"><img src="../../ICONS/workon.png" alt="notifications"> &nbsp; Work
                    In-progress</a></li>-->
            <li><a href="PaymentInformation.php"><img src="../../ICONS/paymentmethod.png" alt="notifications"> &nbsp;
                    Payment
                    Information</a></li>
            <li><a href="workingHistory.php"><img src="../../ICONS/workon.png" alt="notifications"> &nbsp;
                    Working
                    History</a></li>
            <!--<li><a href="#" ><img src="messageIncome.png" alt="notifications" > &nbsp; Incoming-Messages</a></li>-->
            <!--<li><a href="#"><img src="../../ICONS/settings.png" alt="settings">&nbsp; Settings</a></li>-->
            <li><a href="employeePrivacy&Policy.php"><img src="../../ICONS/privacy-policy.png" alt="policy">&nbsp;
                    Privacy &
                    Policy</a></li>
            <li><a href="employeeHelp.php"><img src="../../ICONS/help.png" alt="helpme">&nbsp; Help</a></li>
            <li><a href="../../Inc/e_logout.php"><img src="../../ICONS/logou.png" alt="logmeout">&nbsp; Log out</a></li>
        </ul>
    </div>
    <!--upper bar-->
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search...">
                    <button type="submit"><img src="../../ICONS/search.png" alt=""></button>
                </div>
                <div class="user">
                    <!--<a href="#" class="btn">Log Out</a>-->
                    <div class="img-case">
                        <!--<img src="../../ICONS/worknotifications.png" alt="worknotifications">-->
                    </div>
                </div>
            </div>
        </div>
        <div class="description">
            <h2>Working Notifications</h2>
        </div>
        <!--profile-icon-->
        <div class="Description">
            <!--working-criteria-for-employee-->
            <div class="working-criteria-form--of-employee">
                <form>
                    <label for="working-hour">Choose working-hour:</label><img src="../../ICONS/clock1.png"
                        style="margin-left: 3px;">
                    <select id="working-hour" name="working-hour">
                        <option value="60">None</option>
                        <option value="61">Last 30 minutes</option>
                        <option value="62">Last 1 hour</option>
                        <option value="63">Last 5 hour</option>
                        <option value="64">Last 12 hour</option>
                        <option value="65">Last 24 hour</option>
                    </select>
                    <label for="working-area">Choose working-area:</label><img src="../../ICONS/location4.png"
                        style="margin-left: 5px;">
                    <select id="working-aarea" name="working-area">
                        <option value="90">None</option>
                        <option value="91">Banani</option>
                        <option value="92">Mohakhali</option>
                        <option value="93">Uttara</option>
                        <option value="94">Khilgaon</option>
                        <option value="95">Moghbazar</option>
                        <input type="submit" value=" Search">
                    </select>
                </form>
            </div>
            <div class="headlineofrecords">
                <h2>Searched Records</h2>
            </div>
            <!--record-table-->
            <div class="records-Of-Working-Notifications">
                <table>
                    <tr>
                        <th>Customer name</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Starting Time</th>
                        <th>Working Duration</th>
                        <th>Total Payment</th>
                        <th>Working State</th>
                    </tr>
                    <tr>
                        <td>Ahsan Habib</td>
                        <td>0189634766</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>Not started</td>
                    </tr>
                    <tr>
                        <td>Md Karim</td>
                        <td>0189634700</td>
                        <td>10/22, Mirpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>Not started</td>
                    </tr>
                    <tr>
                        <td>Md Rahim</td>
                        <td>0189634733</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>In-progress</td>
                    </tr>
                    <tr>
                        <td>Shahbudddin</td>
                        <td>0189634755</td>
                        <td>120/2, Mohakhali, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>In-progress</td>
                    </tr>
                    <tr>
                        <td>Mondol Chowdhury</td>
                        <td>0189634727</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>In-progress</td>
                    </tr>
                    <tr>
                        <td>Sakibul Esraq</td>
                        <td>0159634724</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>10:00am</td>
                        <td>5 hour</td>
                        <td>1099</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Muhammed Abir</td>
                        <td>0189634720</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>7:00pm</td>
                        <td>7 hour</td>
                        <td>1999</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Md Alam Haque</td>
                        <td>0189634721</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Md Karimullah</td>
                        <td>0189634722</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Md Rafiqul Islam</td>
                        <td>0189634725</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Mantu Sarkar</td>
                        <td>0189634726</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Samuel Gomez</td>
                        <td>0189634720</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Md Ahsanullah</td>
                        <td>0189634728</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Md Safayet Haque</td>
                        <td>0189634729</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Prangon Mollah</td>
                        <td>0189634729</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Md Shahbuddin</td>
                        <td>0189634729</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Md Shadman Karim</td>
                        <td>0189634729</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Sohel Bhuyian</td>
                        <td>0189634729</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Sakibul Alam</td>
                        <td>0189634729</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Talimul Bari </td>
                        <td>0189634729</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Kowshik Chakraborty</td>
                        <td>0189634729</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Raghav Pal</td>
                        <td>0189634729</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>9 hour</td>
                        <td>7299</td>
                        <td>End</td>
                    </tr>
                </table>
            </div>
</body>

</html>