<?php
	session_start();
	if(!isset($_SESSION['user']))
		header("location: logout.php");
?>

<html>
	<head>
		<title>ACM | Home</title>
		<?php include "css/acm.php"; ?>
		
		<!-- CUSTOM PAGE STYLES -->
		<style>
			.card {
				width: 95% !important;
				margin: 0 auto !important;
			}
			.tabs-container {
				padding: 0 !important;
				margin-bottom: 20px;
			}
			.custom-select {
				width: 30%;
				margin-top: 50px;
				margin-right: 10px;
				display: inline-block;
			}
			.new-proposal-content {
				margin: 20px 0;
			}
		</style>
	</head>
	<body class="container iframe-container">
		
		<div class="row">
			<button class="btn acm-btn modal-trigger" href="#new-proposal">😎 New Proposal</button>
		</div>

		<div class="row" style="background-color: #fff">
			<div class="tabs-container col s12">
			<ul class="tabs">
				<li class="tab col s3"><a class="active" href="#proposal">📝 Proposal</a></li>
				<li class="tab col s3"><a href="#requirements">📋 Requirements Needed</a></li>
				<li class="tab col s3"><a href="#approved">✅ Approved</a></li>
				<li class="tab col s3"><a href="#archieved">📦 Archieved</a></li>
			</ul>
			</div>
			
			<!--
			===========================================
				PROPOSALS
			===========================================
			-->
			<div id="proposal" class="col s12" >

				<div class="row">
					<div class="col s12 m12">
						<div class="card">
							<div class="card-content">
								<span class="card-title">Card Title</span>
								<p>I am a very simple card. I am good at containing small bits of information.
								I am convenient because I require little markup to use effectively.</p>
								<div class="input-field custom-select">
									<select>
									<option value="" disabled selected>Choose your option</option>
									<option value="1">📋 Requirements Needed</option>
									<option value="2">✅ Approved</option>
									<option value="3">📦 Archieved</option>
									</select>
									<label>Move to</label>
								</div>
								<a class="btn waves-effect waves-light acm-btn">👍 apply</a>
							</div>
						</div>
					</div>
				</div>

			</div>


			<!--
			===========================================
				REQUIREMENTS NEEDED
			===========================================
			-->
			<div id="requirements" class="col s12">
			
				<div class="row">
					<div class="col s12 m12">
						<div class="card">
							<div class="card-content">
								<span class="card-title">Card Title</span>
								<p>I am a very simple card. I am good at containing small bits of information.
								I am convenient because I require little markup to use effectively.</p>
								<div class="input-field custom-select">
									<select>
									<option value="" disabled selected>Choose your option</option>
									<option value="1">📝 Proposal</option>
									<option value="2">✅ Approved</option>
									<option value="3">📦 Archieved</option>
									</select>
									<label>Move to</label>
								</div>
								<a class="btn waves-effect waves-light acm-btn">👍 apply</a>
							</div>
						</div>
					</div>
				</div>

			</div>


			<!--
			===========================================
				APPROVED
			===========================================
			-->
			<div id="approved" class="col s12">
			
				<div class="row">
					<div class="col s12 m12">
						<div class="card">
							<div class="card-content">
								<span class="card-title">Card Title</span>
								<p>I am a very simple card. I am good at containing small bits of information.
								I am convenient because I require little markup to use effectively.</p>
								<div class="input-field custom-select">
									<select>
									<option value="" disabled selected>Choose your option</option>
									<option value="1">📝 Proposal</option>
									<option value="2">📋 Requirements Needed</option>
									<option value="3">📦 Archieved</option>
									</select>
									<label>Move to</label>
								</div>
								<a class="btn waves-effect waves-light acm-btn">👍 apply</a>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!--
			===========================================
				ARCHIEVED
			===========================================
			-->
			<div id="archieved" class="col s12">
			
				<div class="row">
					<div class="col s12 m12">
						<div class="card">
							<div class="card-content">
								<span class="card-title">Card Title</span>
								<p>I am a very simple card. I am good at containing small bits of information.
								I am convenient because I require little markup to use effectively.</p>
							</div>
						</div>
					</div>
				</div>

			</div>


			<!--
			===========================================
				ARCHIEVED
			===========================================
			-->
			<div id="new-proposal" class="modal">
				<div class="modal-content">
					<h4>😎 Create New Proposal</h4>
					<div class="new-proposal-content">



					</div>
				</div>
				<div class="modal-footer">
					<a href="#!" class="modal-close waves-effect waves-green btn acm-btn">👌 Confirm</a>
				</div>
			</div>


		</div>
		<script>
			$(document).ready(function() {
				$('.tabs').tabs();
				$('select').formSelect();
				$('.modal').modal();
			});
		</script>
	</body>
</html>