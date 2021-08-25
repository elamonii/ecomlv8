@extends('admin.layout.structure')

@section('admin_content')
<style type="text/css">
	
	body{margin-top:20px;}

	.member-details {
	    padding-top: 5px;
	    padding-bottom: 80px
	}

	@media (min-width:992px) {
	    .member-details {
	        padding-top: 20px;
	        padding-bottom: 100px
	    }
	}

	.member-details .member_designation {
	    margin-bottom: 30px
	}

	.member-details .member_designation h2 {
	    margin-bottom: 5px;
	    margin-top: 25px
	}

	@media (min-width:768px) {
	    .member-details .member_designation h2 {
	        margin-top: 0
	    }
	}

	.member-details .member_designation span {
	    font-style: italic
	}

	.member-details .member_desc li {
	    display: block;
	    float: unset;
	    width: 100%
	}

	.member-details .member_desc li i {
	    color: #0cc652;
	    font-size: 14px
	}

	.member-details .member_desc h4 {
	    margin-top: 40px
	}

	.member-details .member_desc p {
	    margin-top: 10px
	}

	.member-details .member_desc .progress-holder {
	    margin-top: 30px
	}

	.member-details .media-box {
	    margin-bottom: 20px
	}

	@media (min-width:992px) {
	    .member-details .media-box {
	        margin-bottom: 0
	    }
	}

	.member-details .member_contact {
	    padding: 40px;
	    position: relative;
	    margin-top: 40px
	}

	.member-details .member_contact .media-icon {
	    font-size: 32px;
	    color: #dae0e6;
	    position: relative;
	    width: 30px;
	    text-align: center;
	    float: left;
	    margin-right: 15px
	}

	.member-details .member_contact .media-content {
	    padding-left: 0;
	    float: left
	}

	.member-details .member_contact .media-content h5 {
	    font-size: 15px
	}

	.member-details .member_contact .media-content h5,
	.member-details .member_contact .media-content a {
	    color: #dae0e6
	}

	@media (min-width:992px) {
	    .member-details .member_contact .social-icons {
	        text-align: right
	    }
	}

	.member-details .member_contact .social-icons .btn-social {
	    width: 40px;
	    height: 40px;
	    line-height: 40px
	}

	.member-details .member_contact .social-icons .btn {
	    background-color: transparent;
	    border: 1px solid;
	    border-color: #999;
	    color: #dae0e6
	}

	.member-details .member_contact .social-icons .btn:hover {
	    background-color: #0cc652;
	    border-color: #0cc652;
	    opacity: 1
	}

	.bg-image-holder,
	.bg-image {
	    background-size: cover!important;
	    background-position: 50% 0!important;
	    transition: all .3s linear;
	    background: #f5f5f6;
	    position: relative
	}

	.bg-image:before {
	    content: '';
	    position: absolute;
	    top: 0;
	    left: 0;
	    right: 0;
	    bottom: 0;
	    background-color: rgba(0, 0, 0, .7)
	}

	.bg-fixed {
	    background-attachment: fixed
	}

	.bg-image .overlay-content {
	    position: relative;
	    z-index: 5
	}


	.progress-holder {
	    margin-top: 50px
	}

	.progress-holder .barWrapper .progressText {
	    font-size: 15px;
	    color: #222
	}

	.progress-holder .progress {
	    margin-bottom: 25px;
	    margin-top: 10px;
	    overflow: visible;
	    background-color: #f5f5f6
	}

	.progress-holder .progress .progress-bar {
	    position: relative
	}

	.progress-holder .progress .progress-bar:after {
	    position: absolute;
	    content: '';
	    width: 1px;
	    height: 33px;
	    background-color: #0cc652;
	    top: -8px;
	    right: 0;
	    z-index: 55
	}

	.img-full {
	    width: 100%;
	}

	p {
	    color: #8b8e93;
	    font-weight: 300;
	    margin-bottom: 0;
	    font-size: 14px;
	    line-height: 26px;
	}


	.styled_list {
	    margin-top: 15px;
	    position: relative;
	    display: inline-block
	}

	@media (min-width:768px) {
	    .styled_list {
	        margin-top: 15px
	    }
	}

	.styled_list li {
	    font-size: 14px;
	    line-height: 30px
	}

	@media (min-width:768px) {
	    .styled_list li {
	        font-size: 14px;
	        float: left;
	        width: 50%
	    }
	}

	.styled_list li i {
	    margin-right: 10px;
	    font-size: 12px
	}

	.styled_list li a {
	    color: #8b8e93
	}

	@media (min-width:768px) {
	    .styled_list li a {
	        font-size: 12px
	    }
	}

	@media (min-width:992px) {
	    .styled_list li a {
	        font-size: 14px
	    }
	}

	ol.styled_list {
	    margin-left: 15px
	}

	ol.styled_list li {
	    padding-left: 10px
	}




	.list-style9 {
	    list-style: none;
	    padding: 0
	}

	.list-style9 li {
	    position: relative;
	    padding: 0 0 15px 0;
	    margin: 0 0 15px 0;
	    border-bottom: 1px dashed rgba(0, 0, 0, 0.1)
	}

	.list-style9 li:last-child {
	    border-bottom: none;
	    padding-bottom: 0;
	    margin-bottom: 0
	}	

</style>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<div class="card">
	<div class="card-header">
		<h3 class="card-title">User Details</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">

		<section class="member-details">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-3 col-md-4">
	                    <div class="img-container">
	                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="team member" class="img-full">
	                    </div>
	                </div>
	                <div class="col-lg-9 col-md-8">
	                    <div class="member_designation">
	                        <h2>Mark Smitherbrow</h2>
	                        <span>Digital Marketing Manager</span>
	                    </div>
	                    


						<div class="member_designation">
	                        <ul class="list-style9 no-margin">
	                            <li>

	                                <div class="row">
	                                    <div class="col-md-2 col-2">
	                                        <i class="fas fa-map-marker-alt text-green"></i>
	                                        <strong class="margin-10px-left text-green">Address:</strong>
	                                    </div>
	                                    <div class="col-md-10 col-10">
	                                        <p>Regina ST, London, SK.</p>
	                                    </div>
	                                </div>

	                            </li>
	                            <li>

	                                <div class="row">
	                                    <div class="col-md-2 col-2">
	                                        <i class="fas fa-mobile-alt text-purple"></i>
	                                        <strong class="margin-10px-left xs-margin-four-left text-purple">Phone:</strong>
	                                    </div>
	                                    <div class="col-md-10 col-10">
	                                        <p>(+44) 123 456 789</p>
	                                    </div>
	                                </div>

	                            </li>
	                            <li>
	                                <div class="row">
	                                    <div class="col-md-2 col-2">
	                                        <i class="fas fa-envelope text-pink"></i>
	                                        <strong class="margin-10px-left xs-margin-four-left text-pink">Email:</strong>
	                                    </div>
	                                    <div class="col-md-10 col-10">
	                                        <p><a href="javascript:void(0)">name@gmail.com</a></p>
	                                    </div>
	                                </div>
	                            </li>
	                            <li>
	                                <div class="row">
	                                    <div class="col-md-2 col-2">
	                                        <i class="fas fa-user text-gray"></i>
	                                        <strong class="margin-10px-left xs-margin-four-left text-gray">Gender:</strong>
	                                    </div>
	                                    <div class="col-md-10 col-10">
	                                        <p>Male</p>
	                                    </div>
	                                </div>
	                            </li>
	                        </ul>
	                    </div>

	                </div>

	            </div>
	        </div>
	    </section>

	</div>


    <div class="card-footer">
    	<a href="{{ url()->previous() }}">
    		<button class="btn btn-info">Back</button>
    	</a>
    </div>


</div>




@endsection