<?php
get_header();
$_SESSION['previous_page'] = 'dataserv';
?>

<div class="container-fluid" id="page-header-container-fluid" style="background-image: url('public/images/dataservbnr.webp'); background-repeat: no-repeat; background-size: cover; background-position: left; height: 255px; text-align: center; margin-top:-2px">
    <div class="container" id="page-header-container">
        <BR><BR><BR>
        <H1Wtx>Datalynx Specialist Technical Services</H1Wtx>
    </div>
</div>

<div class="container-fluid" id="page-first-container-fluid"><BR><BR>
    <div class="row">
        <div class="col-sm-5"><img src="public/images/dataservside.webp" class="img-fluid" alt="Placeholder image" style="margin-left:-15px"></div>

        <div class="col-sm-5" style="padding-left:50px; padding-right:40px">
            <H15BlDk>Services for Successful Projects <BR>and Ongoing Operations </H15BlDk>
            <BR><BR>
            <BtxtLgB>Datalynx helps Partners and clients using Datalynx technology and solutions to deliver projects successfully and then quickly achieve their desired level of independence.</BtxtLgB> <BR><BR>
            <BtxtMdB>However, that doesn't mean you are on your own. When you need help from the experts, our comprehensive range of support services are designed to promote your success on every initiative you undertake. <BR><BR>Resources and options include:<BtxtB>
                    <ul>
                        <li>Training videos, "how to" videos and technical documentation </li>
                        <li>Structured training courses</li>
                        <li>Structured support</li>
                        <li>Ad-hoc / on call support services</li>
                        <li>On the job mentoring and joint project delivery</li>
                    </ul>
                </BtxtB>
                Datalynx has a track record of 20+ years of successfully solving complex business challenges. See how you can benefit from our expertise in proven data project delivery methodologies, risk mitigation and solution design. <BR><BR></BtxtMdB>
            <!-- Edit content subject contact here -->
            <form action="contact" method="post">
                <button type="submit" class="btn btn-md-bl" name="button" value="Contact from dataserv" style="margin-left:15px; margin-bottom:10px">Contact</button>
            </form>
            <BR><BR>
        </div>
    </div>
    <div class="col-sm-1"></div>
</div>
</div>

<div class="container-fluid" id="page-top-container-fluid" style="background-image: url('public/images/abscomp.webp'); background-repeat: no-repeat; background-size:cover; background-position: center; min-height:310px; border-top:1px solid white">
    <div class="container" id="page-top-container" style="text-align: center">
        <BR><BR>
        <p style="margin-top:15px">
            <H2Wt>If you are a Partner or client requiring support or wishing to know more, please contact us. <BR><BR>
                We can tailor a suite of services to your needs, incorporating any of our service offerings.
                <BR><BR>
                <!-- Edit content subject contact here -->
                <form action="contact" method="post">
                    <button type="submit" class="btn btn-md-bl" name="button" value="Contact from dataserv" style="margin-left:15px; margin-bottom:10px">Contact</button>
                </form>
                <BR><BR>
    </div>
</div>

<div class="container-fluid">
    <BR><BR>
    <div class="row">
        <div class="col-xl-1"></div>

        <div class="col-xl-5" style="text-align:left; padding-left:100px">
            <H15OrDk><BR>Project Outsourcing</H15OrDk>

            <BR><BR>
            <BtxtLgB>The implementation of data solutions in complex business environments requires specialist expertise.</BtxtLgB> <BR><BR>
            <BtxtMdB>Datalynx offers Partners the option to outsource some or all of their project delivery to our team of experts. <BR><BR>This allows Partners to focus on their core areas of expertise, reduce project costs and risks and ensure the data solution implementation is a profitable exercise. <BR><BR>This option is particularly relevant for the initial projects Partners undertake with Datalynx, utilising the opportunity to develop sustainable in-house expertise and subsequently proceeding with Datalynx support "as-needed". </BtxtMdB>
            <BR><BR>
            <BtxtB>Contact Datalynx to learn about our outsourced services :</BtxtMdB>
                <!-- Edit content subject contact here -->
                <form action="contact" method="post">
                    <button type="submit" class="btn btn-md-bl" name="button" value="Contact from dataserv" style="margin-left:15px; margin-bottom:10px">Contact</button>
                </form>
                <BR>
            </BtxtB>
        </div>
        <div class="col-xl-6" style="text-align: right;"> <img src="public/images/outsrc.webp" class="img-fluid" alt="Placeholder image"></div>
    </div>
</div>

<?php
get_footer();
?>