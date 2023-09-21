<?php
if(!isset($_SESSION['manuals_admin'])){
    exit();
} else if($_SESSION['manuals_admin'] != true){
    exit();
}
//CSS for the page?>
<link rel="stylesheet" href="./classes/css/style.css">
<?php //Content for the page?>
<div class="content-div">
    <h1 class="c-title"><b>Admin Manual</b></h1>
    <?php 
        //Introduction
        $template = (object)[
            'usertype' => 'admins'
        ];
        echo $OUTPUT->render_from_template('local_manuals/introduction', $template);
    
        //Include top content
        include_once('./classes/inc/top-content.php') 
    ?>
    <h2 class="section-title" id="dashboard_title"><b>Dashboard +</b></h2>
    <div id="dashboard" class="section-text" style="display: none;">
        <h3 class="section-titlesub" id="d_introduction_title">Introduction +</h3>
        <div id="d_introduction" class="section-text" style="display: none;">
            <img loading="lazy" src="./classes/img/admin/d-introduction.jpg" alt="Dashboard Example" class="content-img click" id="d_introduction_img">
        </div>
        <?php 
            //Navigation Header
            $template = (object)[];
            echo $OUTPUT->render_from_template('local_manuals/d-navh', $template);
        ?>
        <h3 class="section-titlesub" id="d_ntazone_title">NTA Zone +</h3>
        <div id="d_ntazone" class="section-text" style="display: none;">
            <p>
                This can be found on the main page of the website. Below is what will appear on the NTA Zone block.
            </p>
            <img src="./classes/img/admin/d-ntazone.jpg" alt="Dashboard NTA Zone Block" class="content-img">
        </div>
        <h3 class="section-titlesub" id="d_adminblock_title">Administration Block +</h3>
        <div id="d_adminblock" class="section-text" style="display: none;">
            <h4 class="section-titlesub" id="dab_introduction_title">Introduction +</h4>
            <div id="dab_introduction" class="section-text" style="display: none;">
                <p>This block contains all the links needed for administrators of the E-Portfolio.</p>
                <img loading="lazy" src="./classes/img/admin/dab-intro.jpg" alt="Administration Block Example" class="content-img">
            </div>
            <h4 class="section-titlesub" id="dab_userdrop_title">Users Dropdown +</h4>
            <div id="dab_userdrop" class="section-text" style="display: none;">
                <img loading="lazy" src="./classes/img/admin/dab-userdrop.jpg" alt="Administration Block Users Dropdowm" class="content-img">
                <h5 class="section-titlesub" id="dabud_accountdrop_title">Accounts Dropdown +</h5>
                <div id="dabud_accountdrop" class="section-text" style="display: none;">
                    <img loading="lazy" src="./classes/img/admin/dabud-accountdrop.jpg" alt="Administrator Block Accounts Dropdown" class="content-img">
                    <p><b>Browse list of users</b> - Click to browse all the users on the site.</p>
                    <p><b>Buld user actions</b> - For managin multiple users.</p>
                    <p><b>Add a new user</b> - used to create a new user for the E-Portfolio.</p>
                    <a href="">Click to view more</a>
                </div>
            </div>
        </div>
    </div>
    <h2 class="section-title" id="coursepage_title"><b>Course Page +</b></h2>
    <div id="coursepage" class="section-text" style="display: none;">
        <h3 class="section-titlesub" id="cp_introduction_title">Introduction +</h3>
        <div id="cp_introduction" class="section-text" style="display: none;">
            <img loading="lazy" src="./classes/img/admin/c-introduction.jpg" alt="Course Page Introduction" class="content-img click" id="cp_introduction_img">
        </div>
        <h3 class="section-titlesub" id="cp_compb_title">Course Completion Block +</h3>
        <div id="cp_compb" class="section-text" style="display: none;">
            <h4 class="section-titlesub" id="cpcb_use_title">Using the block +</h4>
            <div class="section-text" id="cpcb_use" style="display: none;">
                <p>You have two options to view student progress.</p>
                <img loading="lazy" src="./classes/img/admin/c-ccb-use.jpg" alt="Course Completion Block Example" class="content-img">
            </div>
            <h4 class="section-titlesub" id="cpcb_overview_title">Overview of Students +</h4>
            <div class="section-text" id="cpcb_overview" style="display: none;">
                <p>You have three options when it comes to viewing a learner's progress.</p>
                <img loading="lazy" src="./classes/img/admin/c-ccb-overview.jpg" alt="Course Overview of Students Example" class="content-img">
            </div>
        </div>
        <h3 class="section-titlesub" id="cp_addnew_title">Adding a New Module +</h3>
        <div id="cp_addnew" class="section-text" style="display: none;">
            <h4>Step 1</h4>
            <p>Enter the course you want to add a new module to and then:</p>
            <img loading="lazy" src="./classes/img/admin/c-addnew1.jpg" alt="Adding a new module step 1" class="content-img">
            <h4>Step 2</h4>
            <img loading="lazy" src="./classes/img/admin/c-addnew2.jpg" alt="Adding a new module step 2" class="content-img">
            <h4>Step 3</h4>
            <p>Find the section of the course you want to add a module to and then:</p>
            <img loading="lazy" src="./classes/img/admin/c-addnew3.jpg" alt="Adding a new module step 3" class="content-img">
            <h4>Step 4</h4>
            <img loading="lazy" src="./classes/img/admin/c-addnew4.jpg" alt="Adding a new module step 4" class="content-img">
            <h4>Step 5</h4>
            <img loading="lazy" src="./classes/img/admin/c-addnew5.jpg" alt="Adding a new module step 5" class="content-img">
            <p>
                The exact instructions will vary when adding a new module depending on the module. However they all require similar things, for example all the modules require you to fill out a form. Once you have filled the form out you can save the changes.
            </p>
        </div>
        <h3 class="section-titlesub" id="c_acreport_title">Activity Completion Report +</h3>
        <div id="c_acreport" class="section-text" style="display: none;">
            <h4 class="section-titlesub" id="cacr_introduction_title">Introduction +</h4>
            <div id="cacr_introduction" class="section-text" style="display: none;">
                <p>To find this report you can use the administration block while on a course.</p>
                <p>Below is an example of what you will see when on the activity completion report</p>
                <img loading="lazy" src="./classes/img/adminandcoach/cacr-introduction.jpg" alt="Activity Completion Report Example" class="content-img">
                <p>To see the different completion states, click the heading below.</p>
            </div>
            <h4 class="section-titlesub" id="cacr_keys_title">Activity Completion Keys +</h4>
            <div id="cacr_keys" class="section-text" style="display: none;">
                <img loading="lazy" src="./classes/img/adminandcoach/cacr-keys.jpg" alt="Activity Completion Keys" class="content-img">
            </div>
        </div>
    </div>
    <h2 class="section-title" id="evidencepage_title"><b>Evidence Page +</b></h2>
    <div id="evidencepage" class="section-text" style="display: none;">
        <h3 class="section-titlesub" id="ep_introduction_title">Introduction +</h3>
        <div id="ep_introduction" class="section-text" style="display: none;">
            <img loading="lazy" src="./classes/img/admin/ep-introduction.jpg" alt="Evidence Page Introduction" class="content-img">
        </div>
        <h3 class="section-titlesub" id="ep_addnew_title">Adding New Evidence +</h3>
        <div id="ep_addnew" class="section-text" style="display: none;">
            <img loading="lazy" src="./classes/img/admin/ep-addnew.jpg" alt="Evidence Page Adding New Evidence Example" class="content-img">
        </div>
    </div>
    <h2 class="section-title" id="enrolling_title"><b>Enrolling +</b></h2>
    <div id="enrolling" class="section-text" style="display: none;">
        <h3 class="section-titlesub" id="e_user_title">User to Site +</h3>
        <div id="e_user" class="section-text" style="display: none;">
            <h4>Step 1</h4>
            <img loading="lazy" src="./classes/img/admin/enroluser1.jpg" alt="Enrolling a new user step 1" class="content-img">
            <h4>Step 2</h4>
            <p>Email address needs to be lower case.</p>
            <p>Institution is the company. Here are two examples: iSupply or NTA.</p>
            <p>Department is the placement. Here are two exmaples: Peacocks or Barrhead.</p>
            <img loading="lazy" src="./classes/img/admin/enroluser2.jpg" alt="Enrolling a new user step 2" class="content-img">
        </div>
        <h3 class="section-titlesub" id="e_usercourse_title">User to Course +</h3>
        <div id="e_usercourse" class="section-text" style="display: none;">
            <h4>Step 1</h4>
            <img loading="lazy" src="./classes/img/admin/enrolusers-course1.jpg" alt="Enrolling a user to a course step 1" class="content-img">
            <h4>Step 2</h4>
            <img loading="lazy" src="./classes/img/admin/enrolusers-course2.jpg" alt="Enrolling a user to a course step 2" class="content-img">
            <h4>Step 3</h4>
            <img loading="lazy" src="./classes/img/admin/enrolusers-course3.jpg" alt="Enrolling a user to a course step 3" class="content-img">
            <h4>Step 4</h4>
            <img loading="lazy" src="./classes/img/admin/enrolusers-course4.jpg" alt="Enrolling a user to a course step 4" class="content-img">
            <h4>Step 5</h4>
            <img loading="lazy" src="./classes/img/admin/enrolusers-course5.jpg" alt="Enrolling a user to a course step 5" class="content-img">
        </div>
        <h3 class="section-titlesub" id="e_usercohort_title">User to Cohort +</h3>
        <div id="e_usercohort" section="section-text" style="display: none;">
            <h4>Step 1</h4>
            <img loading="lazy" src="./classes/img/admin/enroluser-cohort1.jpg" alt="Enrolling a user to a cohort step 1" class="content-img">
            <h4>Step 2</h4>
            <img loading="lazy" src="./classes/img/admin/enroluser-cohort2.jpg" alt="Enrolling a user to a cohort step 2" class="content-img">
            <h4>Step 3</h4>
            <img loading="lazy" src="./classes/img/admin/enroluser-cohort3.jpg" alt="Enrolling a user to a cohort step 3" class="content-img">
        </div>
    </div>
    <h2 class="section-title" id="profilepage_title"><b>Profile Page +</b></h2>
    <div id="profilepage" class="section-text" style="display: none;">
        <h3 class="section-titlesub" id="p_introduction_title">Introduction +</h3>
        <div id="p_introduction" class="section-text" style="display: none;">
            <img loading="lazy" src="./classes/img/admin/p-introduction.jpg" alt="Profile page example" class="content-img">
        </div>  
    </div>
    <h2 class="section-title" id="learningplan_title"><b>Learning Plan +</b></h2>
    <div id="learningplan" class="section-text" style="display: none;">
        <h3 class="section-titlesub" id="lp_adduser_title">Add User to Learning Plan +</h3>
        <div id="lp_adduser" class="section-text" style="display: none;">
            <h4>Step 1</h4>
            <img loading="lazy" src="./classes/img/admin/learningplan-add1.jpg" alt="Add learner to learning plan step 1" class="content-img">
            <h4>Step 2</h4>
            <img loading="lazy" src="./classes/img/admin/learningplan-add-user1.jpg" alt="Add learner to learning plan step 2" class="content-img">
            <h4>Step 3</h4>
            <p>You can select multiple users to add to the learning plan.</p>
            <img loading="lazy" src="./classes/img/admin/learningplan-add-user2.jpg" alt="Add learner to learning plan step 3" class="content-img">
            <h4>Step 4</h4>
            <img loading="lazy" src="./classes/img/admin/learningplan-add-user3.jpg" alt="Add learner to learning plan step 4" class="content-img">
            <h4>Step 5</h4>
            <img loading="lazy" src="./classes/img/admin/learningplan-add-user4.jpg" alt="Add learner to learning plan step 5" class="content-img">
            <h4>Step 6</h4>
            <img loading="lazy" src="./classes/img/admin/learningplan-add-user5.jpg" alt="Add learner to learning plan step 6" class="content-img">
            <h4>Step 7</h4>
            <img loading="lazy" src="./classes/img/admin/learningplan-add-user6.jpg" alt="Add learner to learning plan step 7" class="content-img">
            <h4>Step 8</h4>
            <img loading="lazy" src="./classes/img/admin/learningplan-add-user7.jpg" alt="Add learner to learning plan step 8" class="content-img">
            <h4>Step 9</h4>
            <img loading="lazy" src="./classes/img/admin/learningplan-add-user8.jpg" alt="Add learner to learning plan step 9" class="content-img">
        </div>
    </div>
    <h2 class="section-title" id="appendix_title"><b>Appendix +</b></h2>
    <div id="appendix" class="section-text" style="display: none;">
        <h3 class="section-titlesub" id="a_dashboard_title">Dashboard +</h3>
        <div id="a_dashboard" class="section-text" style="display: none;">
            <?php 
                //Account Navigation
                $template = (object)[];
                echo $OUTPUT->render_from_template('local_manuals/ad-accountnav', $template);
                
                //Calendar Block
                $template = (object)[];
                echo $OUTPUT->render_from_template('local_manuals/ad-calendarblock', $template);

                //Private Files Block
                $template = (object)[];
                echo $OUTPUT->render_from_template('local_manuals/ad-privatefile', $template);

                //Navigation Block
                $template = (object)[];
                echo $OUTPUT->render_from_template('local_manuals/ad-navblock', $template);

                //Accessibility Block
                $template = (object)[];
                echo $OUTPUT->render_from_template('local_manuals/ad-accessblock', $template);

                //Accessibility Options
                $template = (object)[];
                echo $OUTPUT->render_from_template('local_manuals/ad-accessopt', $template);
            ?>
            <h4 class="section-titlesub" id="ad_adminblock_title">Administration Block +</h4>  
            <div id="ad_adminblock" class="section-text" style="display: none;">
                <h5 class="section-titlesub" id="adab_coursedrop_title">Courses Dropdown +</h5>
                <div id="adab_coursedrop" class="section-text" style="display: none;">
                    <img loading="lazy" src="./classes/img/admin/adab-coursedrop.jpg" alt="Administration Block, Courses Drop Down" class="content-img">
                    <p><b>Manage courses and categories</b> - This is used to manage all the courses and categories</p>
                    <p><b>Custom fields</b> - Used for customization of fields in a category</p>
                    <p><b>Add a category</b> - Used to create a new category</p>
                    <p><b>Add a new course</b> - Used to create a new course</p>
                    <p><b>Restore course</b> - This is used to restore a course from a file</p>
                    <p><b>Course default settings</b> - Used to set default settings for all courses</p>
                    <p><b>Download course content</b> - This is used to set whether to allow course content to be downloaded</p>
                    <p><b>Course request</b> - This is used to allow a user to make course requests or to not allow it</p>
                    <p><b>Pending requests</b> - This is used to view all course requests</p>
                    <p><b>Activity chooser</b> - This is used to allow teachers to add resources to their course</p>
                    <p><b>Backups</b> - This is used to set the settings for the backup of courses</p>
                    <p><b>Upload course</b> - Used to upload a course from a file</p>
                </div>
                <h5 class="section-titlesub" id="adab_plugindrop_title">Plugins Dropdown +</h5>
                <div id="adab_plugindrop" class="section-text" style="display: none;">
                    <img loading="lazy" src="./classes/img/admin/adab-plugindrop.jpg" alt="Administration Block, Plugins Dropdown" class="content-img">
                </div>
                <h5 class="section-titlesub" id="adab_accountdrop_title">Accounts Dropdown +</h5>
                <div id="adab_accountdrop" class="section-text" style="display: none;">
                    <img loading="lazy" src="./classes/img/admin/adab-accountdrop.jpg" alt="Administration Block, Accounts Dropdown" class="content-img">
                </div>
                <h5 class="section-titlesub" id="adab_permdrop_title">Permissions Dropdown +</h5>
                <div id="adab_permdrop" class="section-text" style="display: none;">
                    <img loading="lazy" src="./classes/img/admin/adab-permdrop.jpg" alt="Administration Block, Permissions Dropdown" class="content-img">
                </div>
                <h5 class="section-titlesub" id="adab_pandpdrop_title">Privacy and Policies Dropdown +</h5>
                <div id="adab_pandpdrop" class="section-text" style="display: none;">
                    <img loading="lazy" src="./classes/img/admin/adab-pandpdrop.jpg" alt="Administration Block, Privacy and Policies Dropdown" class="content-img">
                </div>
            </div>
            <h4 class="section-titlesub" id="ad_mycoachblock_title">My Coach Block +</h4>
            <div id="ad_mycoachblock" class="section-text" style="display: none;">
                <img loading="lazy" src="./classes/img/admin/ad-mycoachblock.jpg" alt="My Coach Block Example" class="content-img">
            </div>
        </div>
        <h3 class="section-titlesub" id="a_coursepage_title">Course Page +</h3>
        <div id="a_coursepage" class="section-text" style="display: none;">
            <h4 class="section-titlesub" id="acp_navblock_title">Navigation Block +</h4>
            <div id="acp_navblock" class="section-text" style="display: none;">
                <h5 class="section-titlesub" id="acpnb_default_title">Default View +</h5>
                <div id="acpnb_default" class="section-text" style="display: none;">
                    <img loading="lazy" src="./classes/img/admin/acpnb-default.jpg" alt="Navigation Block, Default View Example" class="content-img">
                    <p><b>></b> will expand the cateogry when clicked</p>
                    <p><b>v</b> will collapse the category when clicked</p>
                </div>
                <h5 class="section-titlesub" id="acpnb_expanded_title">Expanded View +</h5>
                <div id="acpnb_expanded" class="section-text" style="display: none;">
                    <img loading="lazy" src="./classes/img/admin/acpnb-expanded.jpg" alt="Navigation Block, Expanded View Example" class="content-img">
                </div>
            </div>
            <h4 class="section-titlesub" id="acp_courseadmin_title">Course Administration +</h4>
            <div id="acp_courseadmin" class="section-text" style="display: none;">
                <img loading="lazy" src="./classes/img/admin/acp-courseadmin.jpg" alt="Navigation Block, Course Administration Example" class="content-img">
                <h5 class="section-titlesub" id="acpca_userdrop_title">Users Dropdown +</h5>
                <div id="acpca_userdrop" class="section-text" style="display: none;">
                    <img loading="lazy" src="./classes/img/admin/acpca-userdrop.jpg" alt="Course Administration, Users Dropdown" class="content-img">
                    <p><b>Enrolled users</b> - This allows you to view enrolled users as well as enrol new users</p>
                    <p><b>Enrolment methods</b> - This allows you to view the enrolment methods used to enrol users</p>
                    <p><b>Groups</b> - This allows you to view groups which are in the course</p>
                    <p><b>Permissions</b> - This allows you to manage the permissions different roles have</p>
                    <p><b>Other users</b> - This allows you to view all users who have permissions assigned within the course and who aren't enrolled in the course</p>
                </div>
                <h5 class="section-titlesub" id="acpca_reportdrop_title">Reports Dropdown +</h5>
                <div id="acpca_reportdrop" class="section-text" style="display: none;">
                    <img loading="lazy" src="./classes/img/admin/acpca-reportdrop.jpg" alt="Course Administration, Reports Dropdown" class="content-img">
                    <p><b>Competency breakdown</b> - Gives you a breakdown of all competencies within the course</p>
                    <p><b>Course completion</b> - This allows you to view course completion progress for learners in the course</p>
                    <p><b>Insights</b> - This shows you learners who have not accessed a course they are enrolled in</p>
                    <p><b>Logs</b> - Allows you to get logs for the course</p>
                    <p><b>Live logs</b> - Allows you to view the current logs and get a live update</p>
                    <p><b>Acitivty report</b> - Gives you data related to each module in a course</p>
                    <p><b>Course participation</b> - Allows you to view who has participated and how many times in a specific mdoule</p>
                    <p><b>Activity completion</b> - Allows you to view module completion for learners in the course</p>
                    <h6 class="section-titlesub" id="acpca_activitykey_title">Activity Completion Keys +</h6>
                    <div id="acpca_activitykey" class="section-text" style="display: none;">
                        <img loading="lazy" src="./classes/img/admin/acpca-activitykey.jpg" alt="Activity Completion Keys" class="content-img">
                    </div>
                </div>
            </div>
            <h4 class="section-titlesub" id="acp_calendarblock_title">Calendar Block +</h4>
            <div id="acp_calendarblock" class="section-text" style="display: none;">
                <img loading="lazy" src="./classes/img/admin/acp-calendarblock.jpg" alt="Course Page, Calendar Block" class="content-img">
            </div>
        </div>
        <h3 class="section-titlesub" id="a_learnplan_title">Learning Plan +</h3>
        <div id="a_learnplan" class="section-text" style="display: none;">
            <h4 class="section-titlesub" id="a_lp_add_title">Add a Learning Plan +</h4>
            <div id="a_lp_add" class="section-text" style="display: none;">
                <h5>Step 1</h5>
                <img loading="lazy" src="./classes/img/admin/learningplan-add1.jpg" alt="Add a learning plan step 1" class="content-img">
                <h5>Step 2</h5>
                <img loading="lazy" src="./classes/img/admin/learningplan-add2.jpg" alt="Add a learning plan step 2" class="content-img">
                <h5>Step 3</h5>
                <img loading="lazy" src="./classes/img/admin/learningplan-add3.jpg" alt="Add a learning plan step 3" class="content-img">
                <h5>Step 4</h5>
                <img loading="lazy" src="./classes/img/admin/learningplan-add4.jpg" alt="Add a learning plan step 4" class="content-img">
                <h5>Step 5</h5>
                <img loading="lazy" src="./classes/img/admin/learningplan-add5.jpg" alt="Add a learning plan step 5" class="content-img">
            </div>
        </div>
        <?php 
            //Private Files
            $template = (object)[];
            echo $OUTPUT->render_from_template('local_manuals/a-privatefile', $template);
        ?>
        <h3 class="section-titlesub" id="a_glossary_title">Glossary +</h3>
        <div id="a_glossary" class="section-text" style="display: none;">
            <h4 class="section-titlesub" id="ag_accessglos_title">Accessing Glossary +</h4>
            <div id="ag_accessglos" class="section-text" style="display: none;">
                <img loading="lazy" src="./classes/img/all/ag-accessglos.jpg" alt="Accessing Glossary Example" class="content-img">
            </div>
            <h4 class="section-titlesub" id="ag_glospage_title">Glossary Page +</h4>
            <div id="ag_glospage" class="section-text" style="display: none;">
                <img loading="lazy" src="./classes/img/admin/ag-glospage.jpg" alt="Glossary Page" class="content-img">
            </div>
            <h4 class="section-titlesub" id="ag_addnew_title">Adding New Entry +</h4>
            <div id="ag_addnew" class="section-text" style="display: none;">
                <p>The required steps are numbered in order.</p>
                <p>
                    <img loading="lazy" src="./classes/img/admin/required-icon.jpg" alt="Requried Icon" class="c-icon">
                    = Requires an input
                </p>
                <p>
                    <img loading="lazy" src="./classes/img/admin/notrequired-icon.jpg" alt="Not Required Icon" class="c-icon">
                    = Does not require an input
                </p>
                <img loading="lazy" src="./classes/img/admin/ag-addnew.jpg" alt="Glossary Adding a New Entry" class="content-img">
            </div>
        </div>
        <?php 
            //Process Flow Chart
            $template = (object)[];
            echo $OUTPUT->render_from_template('local_manuals/a-procflow', $template);
        ?>
    </div>
</div>
<?php //Inculde required javascript?>
<script src="./classes/js/functions.js"></script>
<script src="./classes/js/admins.js"></script>