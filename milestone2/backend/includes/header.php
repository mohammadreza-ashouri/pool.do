<?php
		error_reporting(0);
		session_start();
		if ($_COOKIE["auth"] != "admin_in") {header("location:"."./");}
			include("includes/connect.php");
			include("includes/data.php");
			?>
			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta name="author" content="@housamz">

				<meta name="description" content="Mass Admin Panel">
				<title>Pool.do Dashboard Panel</title>
				<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">

				<!-- Custom CSS -->
				<link rel="stylesheet" href="includes/style.css">
				<link href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />

				<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
				<!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
				<!--[if lt IE 9]>
					<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
					<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
				<![endif]-->
				
				<style>
				@import 'https://fonts.googleapis.com/css?family=Roboto+Mono:100'
				html, body
				  font-family 'Roboto Mono', monospace
				  background #212121
				  height 100%
				.container
				  height 100%
				  width 100%
				  justify-content center
				  align-items center
				  display flex
				.text
				  font-weight 100
				  font-size 28px
				  color #FAFAFA
				.dud
				  color #757575
				</style>
				
			</head>

			<body>
			<script>
			// ——————————————————————————————————————————————————
// TextScramble
// ——————————————————————————————————————————————————

class TextScramble {
  constructor(el) {
    this.el = el
    this.chars = '!<>-_\\/[]{}—=+*^?#________'
    this.update = this.update.bind(this)
  }
  setText(newText) {
    const oldText = this.el.innerText
    const length = Math.max(oldText.length, newText.length)
    const promise = new Promise((resolve) => this.resolve = resolve)
    this.queue = []
    for (let i = 0; i < length; i++) {
      const from = oldText[i] || ''
      const to = newText[i] || ''
      const start = Math.floor(Math.random() * 40)
      const end = start + Math.floor(Math.random() * 40)
      this.queue.push({ from, to, start, end })
    }
    cancelAnimationFrame(this.frameRequest)
    this.frame = 0
    this.update()
    return promise
  }
  update() {
    let output = ''
    let complete = 0
    for (let i = 0, n = this.queue.length; i < n; i++) {
      let { from, to, start, end, char } = this.queue[i]
      if (this.frame >= end) {
        complete++
        output += to
      } else if (this.frame >= start) {
        if (!char || Math.random() < 0.28) {
          char = this.randomChar()
          this.queue[i].char = char
        }
        output += `<span class="dud">${char}</span>`
      } else {
        output += from
      }
    }
    this.el.innerHTML = output
    if (complete === this.queue.length) {
      this.resolve()
    } else {
      this.frameRequest = requestAnimationFrame(this.update)
      this.frame++
    }
  }
  randomChar() {
    return this.chars[Math.floor(Math.random() * this.chars.length)]
  }
}

// ——————————————————————————————————————————————————
// Example
// ——————————————————————————————————————————————————

const phrases = [
  'Neo,',
  'sooner or later',
  'you\'re going to realize',
  'just as I did',
  'that there\'s a difference',
  'between knowing the path',
  'and walking the path'
]

const el = document.querySelector('.text')
const fx = new TextScramble(el)

let counter = 0
const next = () => {
  fx.setText(phrases[counter]).then(() => {
    setTimeout(next, 800)
  })
  counter = (counter + 1) % phrases.length
}

next()
			</script>

			<div class="wrapper">
				<!-- Sidebar Holder -->
				<nav id="sidebar" class="bg-primary">
					<div class="sidebar-header">
						<h3>
						<div class="container">
  <div class="text"></div>
</div>
							<br> Dashboard <li class="ant-menu-item pl0 h-logo c-p" role="menuitem"><img src="../pooldo_files/logo.png" class="h-logo c-p" alt="" style="width:200px;height:55px"></li>
							<i id="sidebarCollapse" class="glyphicon glyphicon-circle-arrow-left"></i>
						</h3>
						<strong>
							Pool<br>
							<i id="sidebarExtend" class="glyphicon glyphicon-circle-arrow-right"></i>
						</strong>
					</div><!-- /sidebar-header -->

					<!-- start sidebar -->
					<ul class="list-unstyled components">
						<li>
							<a href="home.php" aria-expanded="false">
								<i class="glyphicon glyphicon-home"></i>
								Home
							</a>
						</li>
			<li><a href="address.php"> <i class="glyphicon glyphicon-sound-stereo"></i>Address <span class="pull-right"><?=counting("address", "id")?></span></a></li>
<li><a href="addressmanagement.php"> <i class="glyphicon glyphicon-compressed"></i>Address Management <span class="pull-right"><?=counting("addressmanagement", "id")?></span></a></li>
<li><a href="assets.php"> <i class="glyphicon glyphicon-folder-open"></i>Assets <span class="pull-right"><?=counting("assets", "id")?></span></a></li>
<li><a href="investmentincome.php"> <i class="glyphicon glyphicon-step-forward"></i>Investment Income <span class="pull-right"><?=counting("investmentincome", "id")?></span></a></li>
<li><a href="loginhistory.php"> <i class="glyphicon glyphicon-arrow-up"></i>Login History <span class="pull-right"><?=counting("loginhistory", "id")?></span></a></li>
<li><a href="miners.php"> <i class="glyphicon glyphicon-floppy-disk"></i>Miners<span class="pull-right"><?=counting("miners", "id")?></span></a></li>
<li><a href="onlinecomputingpower.php"> <i class="glyphicon glyphicon-transfer"></i>Online Computing Power <span class="pull-right"><?=counting("onlinecomputingpower", "id")?></span></a></li>
<li><a href="onlineminer.php"> <i class="glyphicon glyphicon-star-empty"></i>Online Miners <span class="pull-right"><?=counting("onlineminer", "id")?></span></a></li>
<li><a href="servers.php"> <i class="glyphicon glyphicon-minus"></i>Our Servers <span class="pull-right"><?=counting("servers", "id")?></span></a></li>
<li><a href="users.php"> <i class="glyphicon glyphicon-chevron-right"></i>Our Users <span class="pull-right"><?=counting("users", "id")?></span></a></li>
<li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
				</ul>

				<div class="visit">
					<p class="text-center">Pool.do</p>
					<a href="https://pool.do" target="_blank" >Powered by https://pool.do 2021</a>
				</div>
			</nav><!-- /end sidebar -->

			<!-- Page Content Holder -->
			<div id="content">