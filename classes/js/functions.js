//open or close Header
function openHeader(Name, Text){
    let Title = document.getElementById(Name+"_title")
    Title.addEventListener("click", function(){
        let CContent = document.getElementById(Name)
        if(CContent.style.display == 'none'){
            CContent.style.display = 'block'
            Title.innerHTML = Text + ' -'
        } else {
            CContent.style.display = 'none'
            Title.innerHTML = Text + ' +'
        }
    })
}
//open or close Bold Header
function openHeaderBold(Name, Text){
    let Title = document.getElementById(Name+"_title")
    Title.addEventListener("click", function(){
        let CContent = document.getElementById(Name)
        if(CContent.style.display == 'none'){
            CContent.style.display = 'block'
            Title.innerHTML = '<b>'+Text + ' -</b>'
        } else {
            CContent.style.display = 'none'
            Title.innerHTML = '<b>'+Text + ' +</b>'
        }
    })
}
//Return array(x, y, width, height) of an element
const pageContent = document.getElementById('page-content')
const navbar = document.getElementsByClassName('row')[1]
const pageheader = document.getElementById('adaptable-page-header-wrapper')
function WidthandHeight(element, e){
    const theElement = document.getElementById(element)
    const properties = theElement.getBoundingClientRect()
    let x = (e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft) - theElement.offsetLeft
    if(pageContent.getBoundingClientRect()['x']){
        x = x - pageContent.getBoundingClientRect()['x']
    }
    let removeHeight = pageheader.getBoundingClientRect()['height'] + navbar.getBoundingClientRect()['height']
    if(removeHeight == 0){
        removeHeight = document.getElementById('above-header').getBoundingClientRect()['height']
    }
    const y = (e.clientY + document.body.scrollTop + document.documentElement.scrollTop) - theElement.offsetTop - (pageheader.getBoundingClientRect()['height'] + navbar.getBoundingClientRect()['height']) - pageContent.style.paddingTop
    const width = properties['width']
    const height = properties['height']
    const array = [x, y, width, height]
    return array
}
//Opens the Appendix section
function openAppendix(){
    document.getElementById('appendix_title').innerHTML = '<b>Appendix -</b>'
    document.getElementById('appendix').style.display = 'block'
}
//Opens the Appendix Dashboard section
function openADashboard(){
    document.getElementById('a_dashboard_title').innerHTML = 'Dashboard -'
    document.getElementById('a_dashboard').style.display = 'block'
}
//Opens the Appendix Course Page section
function openACoursePage(){
    document.getElementById('a_coursepage_title').innerHTML = 'Course Page -'
    document.getElementById('a_coursepage').style.display = 'block'
}
//Opens the title and contents
function openTitleandContent(title, content, text){
    const element = document.getElementById(title)
    document.getElementById(content).style.display = 'block'
    element.innerHTML = text + ' -'
    element.scrollIntoView()        
}