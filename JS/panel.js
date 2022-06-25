var hamPanel = document.getElementById('hamPanel');
var mobile = document.getElementById('mobile');

hamPanel.addEventListener("click", ()=>{
    if(!mobile.classList.contains("mobile")){
        mobile.classList.add("mobile");
        hamPanel.src="../IMAGE/ant-design_close-outlined.png";
    }else{
        mobile.classList.remove("mobile");
        hamPanel.src="../IMAGE/ant-design_menu-outlined.png";
    }
});