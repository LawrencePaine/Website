<html class="no-js gr__lawrencepaine_eng" lang="en"><!--<![endif]--><head>
<meta charset="utf-8">
@extends('layouts.app')

<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
<!-- load bootstrap from a cdn -->
<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/twitter-bootstrap/3.0.3/css/bootstrap-combined.min.css"> -->

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        header{
        background-color:#DAF7A6; 
        text-align:center;
        padding:40px 0px; 
        }

        header h1{
        margin:0px;
        font-size:26px; 
        color:#414141; 
        font-weight:1000;
        font-family: 'Acme', sans-serif;
        }

        h1 span{
        font-weight:400;
        }

        nav a{
            float: right;
            text-decoration:none;
            color:#556B2F;
            font-size:18px; 
            padding: 20px 30px; 
            transition: all 0.5s ease 0s;
            }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        /* .content {
            text-align: center;
        } */

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        /* Page content */
        .content {
        margin: 50px 17%;
        /* padding: 16px; */
        }

        .content h3{
        border-bottom: 1px solid grey;
        padding-bottom:10px;
        font-family: 'Shadows Into Light', cursive;
        margin-bottom: 20px
        }

        .content p{
        text-align:justify;
        margin-bottom:50px;
        line-height:2;
        }
        
        /* The sticky class is added to the navbar with JS when it reaches its scroll position */
        .sticky {
        position: fixed;
        top: 0;
        width: 100%;
        }

        /* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
        .sticky + .content {
        padding-top: 60px;
        }
        
        .stick-section{
            overflow:hidden;
            background-color:#556B2F;
            margin-bottom:50px;
            width:100%;
            color: #556B2F
        }

        #logo{
        font-size:20px;  
        font-weight:bold;
        float:left;
        padding: 15px 15px;
        }

        nav{
            margin-right: 10%;
        }

        nav a:hover{
        background-color:#002e5b; 
        color:wheat; 
        }
    </style>

@section('content')
<body id="page-top" data-spy="scroll" data-offset="66" data-gr-c-s-loaded="true" style="display: block;">
    <header>
        <h1><span>Sticky Navigation Menu </span>Using Only CSS</h1>
        <h3>W3Codepen-- A place to nurture Your Web Skills</h3>
    </header>
    <div id="logo">Lawrence Paine</div>

    <!-- NAVIGATION START -->
    <div class="sticky-section">
        <nav>
            <a href="#home">Home</a>
            <a href="#profile">Profile</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#achievements">Achievements</a>
        </nav>
    </div>

    <div class="content">
    <h1>Sticky Navbar Tutorial</h1>
    <p>Sticky positioned elements is a combination of relative and fixed positioning.  Lets understand what that means.  When a element is positioned as sticky with CSS3, a threshold value is also added along it. Initially the element behaves like a normal Relative positioned element. Now as you scroll your webpage, when the page reaches the set threshold the element gets stick to that positioned and so the position behavior changes from relative to fixed.</p>

    <h3> Introduction</h3>
    <p>Lets briefly understand what we are going to develop. Simple as that, we will have a navigation bar fixed at a certain position. Now as your scroll your page, the navbar scrolls as well. Now obviously, we don't want to hide our navbar from user coz' that is the guide to browse across our page. So instead of letting the navbar scroll beyond the  browser viewport, we will be sticking the navigation bar to the top. And as you scroll up your contents gets scrolled up while the bar will always be visible at the top. Now lets see what are we going to use for the development</p>

    <h3>HTML -- HyperText Markup Language</h3>
    <p>In this tutorial, We have used HTML and CSS to develop sticky navigation Menu. We've made use of sticky positioning for that purpose</p>

    <h3>CSS -- Cascading StyleSheet</h3>
    <p>Sticky position is relatviely new to CSS. This is just a hybrid form of relative and fixed position which changes at a preset threshold.</p>

    <h3>JS -- JavaScript</h3>
    <p>This tutorial teaches the development of sticky navigation bar with just HTML and CSS. We will be making no use of JavaScript at all. Though most web developers use JavaScript for sticky navigation menu since the sticky concept on 
    CSs is relatively new.</p>

    <h3> Web Development Introduction</h3>
    <p>It's Amazing how Web has reached to every corner of the world flourishing the infromation. Imagine how our life could have been, had there not been websites to search visit when you are in deperate need for answers or when you are bored. I find myself engrossed in this web entagnlement and get amazed at this wonderous achievement of human. If you are reading this portion, Then seriously? What's wrong with You? Focus on Development Section. Not within these Paragraphs. These are Just some Fillers</p>
    
  </div>
</body><html