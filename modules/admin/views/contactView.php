<?php
$data = getDataContact();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo base_url(); ?>"/>
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="public/css/adminhub.css">
	<title>AdminHub</title>
</head>

<body>
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="admin">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="active">
				<a href="admin/contact">
					<i class='bx bxs-message-dots'></i>
					<span class="text">Contact</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-shopping-bag-alt'></i>
					<span class="text">My Store</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart'></i>
					<span class="text">Analytics</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group'></i>
					<span class="text">Team</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="logout" class="logout">
					<i class='bx bxs-log-out-circle'></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<section id="content">
		<nav>
			<i class='bx bx-menu'></i>
			<a href="#" class="profile">
				<img src="public/images/admin.jpg">
			</a>
		</nav>
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Contact</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Contact</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Detail</a>
						</li>
					</ul>
				</div>
			</div>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Contact</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>No</th>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Role</th>
								<th>Enquiry</th>
								<th>Message</th>
								<th>Contact date</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$temp = 1;
							foreach ($data as $item) {
								$date = date('Y-m-d', strtotime($item['created_at']));
							?>
								<tr>
									<td><?php echo $temp++; ?></td>
									<td><?php echo $item['name']; ?></td>
									<td width="200"><?php echo $item['email']; ?></td>
									<td><?php echo $item['phone']; ?></td>
									<td><?php echo $item['role']; ?></td>
									<td><?php echo $item['subject']; ?></td>
									<td width="200"><?php echo $item['message']; ?></td>
									<td><?php echo $date ?></td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</main>
	</section>

	<script src="public/js/admin.js"></script>
</body>

</html>
