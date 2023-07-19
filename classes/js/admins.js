//Introduction section
openHeaderBold('introduction', 'Introduction')

//Logging In section
openHeaderBold('loggingin', 'Logging In')

//Resetting section
openHeaderBold('resetting', 'Resetting Password or Forgotten Username')

//Accept Policies section
openHeaderBold('acceptpolicy', 'Accepting Policies')

//Dashboard section
openHeaderBold('dashboard', 'Dashboard')
openHeader('d_introduction', 'Introduction')
openHeader('d_navhead', 'Navigation Header')
openHeader('d_ntazone', 'NTA Zone')
openHeader('d_adminblock', 'Administrator Block')
openHeader('dab_introduction', 'Introduction')
openHeader('dab_userdrop', 'Users Dropdown')
openHeader('dabud_accountdrop', 'Accounts Dropdown')

//Course Page section
openHeaderBold('coursepage', 'Course Page')
openHeader('cp_introduction', 'Introduction')
openHeader('cp_compb', 'Course Completion Block')
openHeader('cpcb_use','Using the Block')
openHeader('cpcb_overview', 'Overview of Students')
openHeader('cp_addnew', 'Adding a New Module')
openHeader('c_acreport', 'Activity Completion Report')
openHeader('cacr_introduction', 'Introduction')
openHeader('cacr_keys', 'Activity Completion Keys')

//Evidence Page section
openHeaderBold('evidencepage', 'Evidence Page')
openHeader('ep_introduction', 'Introduction')
openHeader('ep_addnew', 'Adding New Evidence')

//Enrolling User section
openHeaderBold('enrolling', 'Enrolling')
openHeader('e_user', 'User to Site')
openHeader('e_usercourse', 'User to Course')
openHeader('e_usercohort', 'User to Cohort')

//Profile Page section
openHeaderBold('profilepage', 'Profile Page')
openHeader('p_introduction', 'Introduction')

//Learning Plan section
openHeaderBold('learningplan', 'Learning Plan')
openHeader('lp_adduser', 'Add User to Learning Plan')

//Appendix section
openHeaderBold('appendix', 'Appendix')
openHeader('a_dashboard', 'Dashboard')
openHeader('ad_accountnav', 'Account Navigation')
openHeader('ad_calendarblock', 'Calendar Block')
openHeader('ad_privatefile', 'Private Files Block')
openHeader('ad_navblock', 'Navigation Block')
openHeader('ad_accessblock', 'Accessibility Block')
openHeader('ad_accessopt', 'Accessibility Options')
openHeader('adao_pagewidth', 'Page Width')
openHeader('adao_blocks', 'Display Blocks')
openHeader('ad_adminblock', 'Administration Block')
openHeader('adab_coursedrop', 'Courses Dropdown')
openHeader('adab_plugindrop', 'Plugin Dropdown')
openHeader('adab_accountdrop', 'Accounts Dropdown')
openHeader('adab_permdrop', 'Permissions Dropdown')
openHeader('adab_pandpdrop', 'Privacy and Polcies Dropdown')
openHeader('ad_mycoachblock', 'My Coach Block')
openHeader('a_coursepage', 'Course Page')
openHeader('acp_navblock', 'Navigation Block')
openHeader('acpnb_default', 'Default View')
openHeader('acpnb_expanded', 'Expanded View')
openHeader('acp_courseadmin', 'Course Administration')
openHeader('acpca_userdrop', 'Users Dropdown')
openHeader('acpca_reportdrop', 'Reports Dropdown')
openHeader('acpca_activitykey', 'Activity Completion Keys')
openHeader('acp_calendarblock', 'Calendar Block')
openHeader('a_glossary', 'Glossary')
openHeader('ag_accessglos', 'Accessing Glossary')
openHeader('ag_glospage', 'Glossary Page')
openHeader('ag_addnew', 'Adding New Entry')
openHeader('a_procflow', 'Process Flow Chart')
openHeader('a_learnplan', 'Learning Plan')
openHeader('a_lp_add', 'Add a Learning Plan')
openHeader('a_privatefile', 'Private Files')
openHeader('apf_introduction', 'Introduction')
openHeader('apf_fileandfolder', 'File and Folder Options')
openHeader('apffaf_fileopt', 'File Option')
openHeader('apffaf_folderopt', 'Folder Option')
openHeader('apf_sortopt', 'Sorting Options')
openHeader('apf_managefaf', 'Managin Files and Folders')
openHeader('apfm_folder', 'Managing Folders')
openHeader('apfm_file', 'Managing Files')

const dIntroductionImage = document.getElementById('d_introduction_img')
dIntroductionImage.onclick = (e) => {
    const array = WidthandHeight('d_introduction_img', e)
    if(array[0] >= (array[2]*0.6525) && array[0] <= (array[2]*0.8412) && array[1] >= (array[3]*0.0019) && array[1] <= (array[3]*0.0384)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_accountnav_title', 'ad_accountnav', 'Account Navigation')
    } else if (array[0] >= (array[2]*0.2884) && array[0] <= (array[2]*0.4662) && array[1] >= (array[3]*0.0244) && array[1] <= (array[3]*0.0607)){
        openTitleandContent('d_navhead_title', 'd_navhead', 'Navigation Header')
    } else if (array[0] >= (array[2]*0.7140) && array[0] <= (array[2]*0.8387) && array[1] >= (array[3]*0.1651) && array[1] <= (array[3]*0.2224)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_accessopt_title', 'ad_accessopt', 'Accessibility Options')
    } else if (array[0] >= (array[2]*0.7226) && array[0] <= (array[2]*0.8285) && array[1] >= (array[3]*0.3642) && array[1] <= (array[3]*0.4001)){
        openTitleandContent('d_ntazone_title', 'd_ntazone', 'NTA Zone')
    } else if (array[0] >= (array[2]*0.4197) && array[0] <= (array[2]*0.6049) && array[1] >= (array[3]*0.6521) && array[1] <= (array[3]*0.6899)){
        openTitleandContent('d_adminblock_title', 'd_adminblock', 'Administration Block')
    } else if (array[0] >= (array[2]*0.4350) && array[0] <= (array[2]*0.5971) && array[1] >= (array[3]*0.7401) && array[1] <= (array[3]*0.7765)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_mycoachblock_title', 'ad_mycoachblock', 'My Coach Block')
    } else if (array[0] >= (array[2]*0.4398) && array[0] <= (array[2]*0.6077) && array[1] >= (array[3]*0.8973) && array[1] <= (array[3]*0.9324)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_accessblock_title', 'ad_accessblock', 'Accessibility Block')
    } else if (array[0] >= (array[2]*0.0179) && array[0] <= (array[2]*0.1238) && array[1] >= (array[3]*0.3035) && array[1] <= (array[3]*0.3693)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_calendarblock_title', 'ad_calendarblock', 'Calendar Block')
    } else if (array[0] >= (array[2]*0.0109) && array[0] <= (array[2]*0.0955) && array[1] >= (array[3]*0.4364) && array[1] <= (array[3]*0.5119)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_privatefile_title', 'ad_privatefile', 'Private Files Block')
    } else if (array[0] >= (array[2]*0.0095) && array[0] <= (array[2]*0.1232) && array[1] >= (array[3]*0.6286) && array[1] <= (array[3]*0.6853)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_navblock_title', 'ad_navblock', 'Navigation Block')
    }
}

const cpIntroductionImage = document.getElementById('cp_introduction_img')
cpIntroductionImage.onclick = (e) => {
    const array = WidthandHeight('cp_introduction_img', e)
    if(array[0] >= (array[2]*0.3185) && array[0] <= (array[2]*0.5392) && array[1] >= (array[3]*0.0001) && array[1] <= (array[3]*0.0497)){
        openTitleandContent('cp_compb_title', 'cp_compb', 'Course Completion Block')
    } else if (array[0] >= (array[2]*0.0026) && array[0] <= (array[2]*0.1113) && array[1] >= (array[3]*0.4064) && array[1] <= (array[3]*0.4776)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_calendarblock_title', 'ad_calendarblock', 'Calendar Block')
    } else if (array[0] >= (array[2]*0.0010) && array[0] <= (array[2]*0.1153) && array[1] >= (array[3]*0.6445) && array[1] <= (array[3]*0.7188)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_navblock_title', 'ad_navblock', 'Navigation Block')
    } else if (array[0] >= (array[2]*0.2469) && array[0] <= (array[2]*0.4509) && array[1] >= (array[3]*0.9525) && array[1] <= (array[3]*0.9989)){
        openAppendix()
        openACoursePage()
        openTitleandContent('acp_courseadmin_title', 'acp_courseadmin', 'Course Administration')
    }
}