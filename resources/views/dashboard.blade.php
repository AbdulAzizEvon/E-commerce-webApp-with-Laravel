<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="{{ asset('css/style2.css') }}">

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li class="activ-">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text " Name="dashboard">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text" Name="mystore">My Store</span>
				</a>
			</li>
			<li>
				<a href="#">
                    <i class='bx bxs-shopping-bag'></i>
					<span class="text" Name="orders">Orders</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text" Name="message">Message</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text" Name="team">Team</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text" Name="settings">Settings</span>
				</a>
			</li>
			<li>
				{{-- <a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span> --}}
                <form action="{{url('/')}}/logout" method="post">
                        @csrf
                    <div>
                        <i class='bx bxs-log-out-circle' ></i>
                        <button type="submit">Logout</button>
                   </div>
                </form>
				{{-- </a> --}}
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->


	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="admin-panel dashboard active">
				<div class="head-title">
					<div class="left">
						<h1>Dashboard</h1>
						<ul class="breadcrumb">
							<li>
								<a href="#">Dashboard</a>
							</li>
							<li><i class='bx bx-chevron-right' ></i></li>
							<li>
								<a class="active" href="#">Home</a>
							</li>
						</ul>
					</div>
					<a href="#" class="btn-download">
						<i class='bx bxs-cloud-download' ></i>
						<span class="text">Download PDF</span>
					</a>
				</div>

				<ul class="box-info">
					<li>
						<i class='bx bxs-calendar-check' ></i>
						<span class="text">
							<h3>1020</h3>
							<p>New Order</p>
						</span>
					</li>
					<li>
						<i class='bx bxs-group' ></i>
						<span class="text">
							<h3>2834</h3>
							<p>Visitors</p>
						</span>
					</li>
					<li>
						<i class='bx bxs-dollar-circle' ></i>
						<span class="text">
							<h3>$2543</h3>
							<p>Total Sales</p>
						</span>
					</li>
				</ul>


				<div class="table-data">
					<div class="order">
						<div class="head">
							<h3>Recent Orders</h3>
							<i class='bx bx-search' ></i>
							<i class='bx bx-filter' ></i>
						</div>
						<table>
							<thead>
								<tr>
									<th>User</th>
									<th>Date Order</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<img src="img/people.png">
										<p>John Doe</p>
									</td>
									<td>01-10-2021</td>
									<td><span class="status completed">Completed</span></td>
								</tr>
								<tr>
									<td>
										<img src="img/people.png">
										<p>John Doe</p>
									</td>
									<td>01-10-2021</td>
									<td><span class="status pending">Pending</span></td>
								</tr>
								<tr>
									<td>
										<img src="img/people.png">
										<p>John Doe</p>
									</td>
									<td>01-10-2021</td>
									<td><span class="status process">Process</span></td>
								</tr>
								<tr>
									<td>
										<img src="img/people.png">
										<p>John Doe</p>
									</td>
									<td>01-10-2021</td>
									<td><span class="status pending">Pending</span></td>
								</tr>
								<tr>
									<td>
										<img src="img/people.png">
										<p>John Doe</p>
									</td>
									<td>01-10-2021</td>
									<td><span class="status completed">Completed</span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="todo">
						<div class="head">
							<h3>Todos</h3>
							<i class='bx bx-plus' ></i>
							<i class='bx bx-filter' ></i>
						</div>
						<ul class="todo-list">
							<li class="completed">
								<p>Todo List</p>
								<i class='bx bx-dots-vertical-rounded' ></i>
							</li>
							<li class="completed">
								<p>Todo List</p>
								<i class='bx bx-dots-vertical-rounded' ></i>
							</li>
							<li class="not-completed">
								<p>Todo List</p>
								<i class='bx bx-dots-vertical-rounded' ></i>
							</li>
							<li class="completed">
								<p>Todo List</p>
								<i class='bx bx-dots-vertical-rounded' ></i>
							</li>
							<li class="not-completed">
								<p>Todo List</p>
								<i class='bx bx-dots-vertical-rounded' ></i>
							</li>
						</ul>
					</div>
				</div>
			</div>

            {{-- mystore --}}
            <div class="admin-panel mystore ">
                <button type="button">Add Item</button>
                <div class="item-info">
                    <form action="">
                        <div>
                            <label for="ttl">Title</label>
                            <input type="text" name="ttl">
                        </div>
                        <div>
                            <label for="prc">Price</label>
                            <input type="text" name="prc">
                        </div>
                        <div>
                            <label for="description">Description</label>
                            <textarea name="description"></textarea>
                        </div>
                        <div>
                            <button>Cancle</button>
                            <button>Save</button>
                        </div>
                    </form>
                </div>
                {{-- table --}}
                <table>
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                      </tr>
                     </thead>
                     <tbody>
                       <tr>
                         <td>text1.1</td>
                         <td>text1.2</td>
                         <td>
                             <button>Edit</button>
                             <button>Delete</button>
                        </td>
                       </tr>
                    </tbody>
                  </table>
            </div>
            {{-- orders --}}
            <div class="admin-panel orders">
                <table>
                    <thead>
                      <tr>
                        <th>Customers</th>
                        <th>Bill</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Order Status</th>
                        <th>Order Date</th>
                        <th>Action</th>
                      </tr>
                     </thead>
                     <tbody>
                       <tr>
                         <td>text1.1</td>
                         <td>text1.2</td>
                         <td>
                             <button>Edit</button>
                             <button>Delete</button>
                        </td>
                       </tr>
                    </tbody>
                  </table>
            </div>
            <div class="admin-panel message">
                <table>
                    <thead>
                      <tr>
                        <th>User Name</th>
                        <th>Message</th>
                        <th>Action</th>
                      </tr>
                     </thead>
                     <tbody>
                       <tr>
                         <td>text1.1</td>
                         <td>text1.2</td>
                         <td>
                             <button>Edit</button>
                             <button>Delete</button>
                        </td>
                       </tr>
                    </tbody>
                  </table>
            </div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
{{--
    <div class="con">
        @include('dashboard')
     </div> --}}


	<script src="{{ asset('js/script.js') }}"></script>
	{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript">
        // $(document).ready(function(){ --}}
            {{-- // var trigger=$( ul li a),
            // container= $(content);
            // trigger.on('click', function(){
            //     target= $(this).data('target');
            //     container.load(target);
            //     return false;
            // })
    //  routeTomystore(){
    //     event.preventDefault();
    //     const CSRF_TOCKEN=$('meta[name="csrf-token"]').attr('content');
    //     $.ajax({
    //     url: /mystore,
    //     // dataType: "json",
    //     type: "GET",
    //     // async: true,
    //     data: {
    //         CSRF_TOCKEN
    //     },
    //     success: function (data) {
    //             // console.log(data);
    //             $("#con").html(data)
    //     },

    //     })
    // }
// } --}}
    {{-- </script> --}}
</body>
</html>
