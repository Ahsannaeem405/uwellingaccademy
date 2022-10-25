@extends('theme.master')
@section('title', 'Class Schedule')
@section('content')
@include('admin.message')


<div class="inner-pages">
    <!-- ========== Start Page Title ========== -->

    <section class="page-title" id="page-title">
        <div class="container">
            <div class="content">
                <h2>Class Schedule</h2>
                <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li>Schedule</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ========== End Page Title ========== -->

    <!-- ========== Start Schedule ========== -->

    <section class="class-schedule" id="class-schedule">
        <div class="container">
            <div class="main-title text-center">
                <span class="separator">

                </span>
                <h2>Class Schedule</h2>
            </div>
            <div class="filter-menu">
                <ul class="list-filter list-unstyled">
                    <li class="active" data-filter=".all" data-type=".all">All Classes</li>
                    <li data-filter=".body-balance" data-type=".body-balance">Class 1</li>
                    <li data-filter=".hatha-yoga" data-type=".hatha-yoga">Class 2</li>
                    <li data-filter=".children-yoga" data-type=".children-yoga">Class 3</li>
                    <li data-filter=".pilates" data-type=".pilates">Class 4</li>
                    <li data-filter=".yoga-dance" data-type=".yoga-dance">Class 5</li>
                </ul>
            </div>
            <div class="timetable text-center d-none d-lg-block">
                <table>
                    <tr class="table-head">
                        <td></td>
                        <td>
                            Monday
                        </td>
                        <td>
                            Tuesday
                        </td>
                        <td>
                            Wednesday
                        </td>
                        <td>
                            Thursday
                        </td>
                        <td>
                            Friday
                        </td>
                        <td>
                            Saturday
                        </td>
                        <td>
                            Sunday
                        </td>
                    </tr>
                    <tr>
                        <td class="time">
                            09.00
                        </td>
                        <td class="body-balance all animated fadeIn">
                            <h4>Class 1</h4>
                            <span>9:00 - 10:00</span>
                            <h5>Elina Ekman</h5>
                        </td>
                        <td></td>
                        <td class="hatha-yoga all animated fadeIn">
                            <h4>Class 2</h4>
                            <span>9:00 - 10:00</span>
                            <h5>Jack Hakman</h5>
                        </td>
                        <td class="children-yoga all animated fadeIn">
                            <h4>Class 3</h4>
                            <span>9:00 - 10:00</span>
                            <h5>Razan Smith</h5>
                        </td>
                        <td class="pilates all animated fadeIn">
                            <h4>Class 4</h4>
                            <span>9:00 - 10:00</span>
                            <h5>Peter Doe</h5>
                        </td>
                        <td></td>
                        <td class="yoga-dance all animated fadeIn">
                            <h4>Class 5</h4>
                            <span>9:00 - 10:00</span>
                            <h5>Lily Garner</h5>
                        </td>
                    </tr>
                    <tr>
                        <td class="time">
                            10.00
                        </td>
                        <td></td>
                        <td class="body-balance all animated fadeIn">
                            <h4>Class 1</h4>
                            <span>10:00 - 11:00</span>
                            <h5>Elina Ekman</h5>
                        </td>
                        <td class="yoga-dance all animated fadeIn">
                            <h4>Class 5</h4>
                            <span>10:00 - 11:00</span>
                            <h5>Lily Garner</h5>
                        </td>
                        <td></td>
                        <td class="hatha-yoga all animated fadeIn">
                            <h4>Class 2</h4>
                            <span>10:00 - 11:00</span>
                            <h5>Jack Hakman</h5>
                        </td>
                        <td class="pilates all animated fadeIn">
                            <h4>Class 4</h4>
                            <span>10:00 - 11:00</span>
                            <h5>Peter Doe</h5>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="time">
                            11.00
                        </td>
                        <td class="yoga-dance all animated fadeIn">
                            <h4>Class 5</h4>
                            <span>11:00 - 12:00</span>
                            <h5>Lily Garner</h5>
                        </td>
                        <td class="hatha-yoga all animated fadeIn">
                            <h4>Class 2</h4>
                            <span>11:00 - 12:00</span>
                            <h5>Jack Hakman</h5>
                        </td>
                        <td></td>
                        <td class="body-balance all animated fadeIn">
                            <h4>Class 1</h4>
                            <span>11:00 - 12:00</span>
                            <h5>Elina Ekman</h5>
                        </td>
                        <td></td>
                        <td class="hatha-yoga all animated fadeIn">
                            <h4>Class 2</h4>
                            <span>11:00 - 12:00</span>
                            <h5>Jack Hakman</h5>
                        </td>
                        <td class="yoga-dance all animated fadeIn">
                            <h4>Class 5</h4>
                            <span>11:00 - 12:00</span>
                            <h5>Lily Garner</h5>
                        </td>
                    </tr>
                    <tr>
                        <td class="time">
                            12.00
                        </td>
                        <td></td>
                        <td class="body-balance all animated fadeIn">
                            <h4>Class 1</h4>
                            <span>12:00 - 13:00</span>
                            <h5>Elina Ekman</h5>
                        </td>
                        <td class="children-yoga all animated fadeIn">
                            <h4>Class 3</h4>
                            <span>12:00 - 13:00</span>
                            <h5>Razan Smith</h5>
                        </td>
                        <td></td>
                        <td class="pilates all animated fadeIn">
                            <h4>Class 4</h4>
                            <span>12:00 - 13:00</span>
                            <h5>Peter Doe</h5>
                        </td>
                        <td></td>
                        <td class="body-balance all animated fadeIn">
                            <h4>Class 1</h4>
                            <span>12:00 - 13:00</span>
                            <h5>Elina Ekman</h5>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="timetable-small d-block d-lg-none">
                <div class="group-list">
                    <h3>Monday</h3>
                    <ul class="list-unstyled">
                        <li class="body-balance all">
                            <h4>Class 5</h4>
                            <span>09:00 - 10:00</span>
                        </li>
                        <li class="yoga-dance all">
                            <h4>Class 2</h4>
                            <span>11:00 - 12:00</span>
                        </li>
                    </ul>
                </div>
                <div class="group-list">
                    <h3>Tuesday</h3>
                    <ul class="list-unstyled">
                        <li class="body-balance all">
                            <h4>Class 1</h4>
                            <span>10:00 - 11:00</span>
                        </li>
                        <li class="hatha-yoga all">
                            <h4>Class 3</h4>
                            <span>11:00 - 12:00</span>
                        </li>
                        <li class="body-balance all">
                            <h4>Class 4</h4>
                            <span>12:00 - 13:00</span>
                        </li>
                    </ul>
                </div>
                <div class="group-list">
                    <h3>Wednesday</h3>
                    <ul class="list-unstyled">
                        <li class="hatha-yoga all">
                            <h4>Class 1</h4>
                            <span>09:00 - 10:00</span>
                        </li>
                        <li class="yoga-dance all">
                            <h4>Class 2</h4>
                            <span>10:00 - 11:00</span>
                        </li>
                        <li class="children-yoga all">
                            <h4>Class 4</h4>
                            <span>12:00 - 13:00</span>
                        </li>
                    </ul>
                </div>
                <div class="group-list">
                    <h3>Thursday</h3>
                    <ul class="list-unstyled">
                        <li class="children-yoga all">
                            <h4>Class 4</h4>
                            <span>09:00 - 10:00</span>
                        </li>
                        <li class="body-balance all">
                            <h4>Class 5</h4>
                            <span>11:00 - 12:00</span>
                        </li>
                    </ul>
                </div>
                <div class="group-list">
                    <h3>Friday</h3>
                    <ul class="list-unstyled">
                        <li class="pilates all">
                            <h4>Class 3</h4>
                            <span>09:00 - 10:00</span>
                        </li>
                        <li class="hatha-yoga all">
                            <h4>Class 2</h4>
                            <span>10:00 - 11:00</span>
                        </li>
                        <li class="pilates all">
                            <h4>Class 3</h4>
                            <span>12:00 - 13:00</span>
                        </li>
                    </ul>
                </div>
                <div class="group-list">
                    <h3>Saturday</h3>
                    <ul class="list-unstyled">
                        <li class="pilates all">
                            <h4>Class 3</h4>
                            <span>10:00 - 11:00</span>
                        </li>
                        <li class="hatha-yoga all">
                            <h4>Class 2</h4>
                            <span>11:00 - 12:00</span>
                        </li>
                    </ul>
                </div>
                <div class="group-list">
                    <h3>Sunday</h3>
                    <ul class="list-unstyled">
                        <li class="yoga-dance all">
                            <h4>Class 1</h4>
                            <span>09:00 - 10:00</span>
                        </li>
                        <li class="yoga-dance all">
                            <h4>Class 2</h4>
                            <span>11:00 - 12:00</span>
                        </li>
                        <li class="body-balance all">
                            <h4>Class 3</h4>
                            <span>12:00 - 13:00</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== End Schedule ========== -->


    <!-- ========== Start Newsletter ========== -->

    <section class="newsletter">
        <div class="container">
            <div class="newsletter-inner">
                <div class="row">
                    <div class="col-lg-5">
                        <h2>Subscribe to our newsletter</h2>
                        <p>Get started with UWELLING ACCADEMY</p>
                    </div>
                    <div class="col-lg-7">
                        <form class="newsletter-form" action="#" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Enter your email"
                                    required>
                                <button class="main-btn" type="submit" name="send"><span>Subscribe</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== End Newsletter ========== -->
</div>
@endsection