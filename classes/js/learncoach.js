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
openHeader('d_completion', 'Completion Progress Block')
openHeader('d_overview', 'Course Overview Block')

//Course section
openHeader('c_onlinetext', 'Online Text (Option A)')

//Appendix section
openHeader('a_textboxopt', 'Text Box Options')
openHeader('atbo_insertimg', 'Insert Image')
openHeader('atbo_insertmedia', 'Insert Media')
openHeader('atbo_browserepo', 'Browse Repositories')
openHeader('atbo_videotoptip', 'Video Recording Top Tip')

//Appendix Insert Image Clicked
const atboInsertImg = document.getElementById('atbo_insertimg_img')
atboInsertImg.onclick = (e) => {
    const array = WidthandHeight('atbo_insertimg_img', e)
    if(array[0] >= (array[2]*0.7476) && array[0] <= (array[2]*0.9014) && array[1] >= (array[3]*0.0776) && array[1] <= (array[3]*0.1184)){
        openTitleandContent('atbo_browserepo_title', 'atbo_browserepo', 'Browse Repositories')
    }
}
//Appendix Insert Media Clicked
const atboInsertMedia = document.getElementById('atbo_insertmedia_img')
atboInsertMedia.onclick = (e) => {
    const array = WidthandHeight('atbo_insertmedia_img', e)
    if(array[0] >= (array[2]*0.8242) && array[0] <= (array[2]*0.9234) && array[1] >= (array[3]*0.4665) && array[1] <= (array[3]*0.5747)){
        openTitleandContent('atbo_browserepo_title','atbo_browserepo','Browse Repositories')
    }
}

//For record a video top tip
function onlineTextMore(h2, div, text){
    openAppendix()
    openTitleandContent('a_textboxopt_title', 'a_textboxopt', 'Text Box options')
    openTitleandContent(h2, div, text)
}