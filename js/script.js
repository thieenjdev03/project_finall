const forms = document.querySelector(".forms"),
      pwShowHide = document.querySelectorAll(".eye-icon"),
      links = document.querySelectorAll(".link");

pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
        let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
        
        pwFields.forEach(password => {
            if(password.type === "password"){
                password.type = "text";
                eyeIcon.classList.replace("bx-hide", "bx-show");
                return;
            }
            password.type = "password";
            eyeIcon.classList.replace("bx-show", "bx-hide");
        })
        
    })
})      

links.forEach(link => {
    link.addEventListener("click", e => {
       e.preventDefault(); //preventing form submit
       forms.classList.toggle("show-signup");
    })
})
// Thông Báo Đăng Nhập Để Mua Hàng
function login_to_buy() {
    alert("Quý Khách Vui Lòng Đăng Nhập Để Mua Hàng");
    window.location.href='/direct/login_form.html';
  }
// Modal-box-click
const section = document.querySelector("section"),
overlay = document.querySelector(".overlay"),
showBtn = document.querySelector(".show-modal"),
closeBtn = document.querySelector(".close-btn");

showBtn.addEventListener("click", () => section.classList.add("active"));

overlay.addEventListener("click", () =>
section.classList.remove("active")
);

closeBtn.addEventListener("click", () =>
section.classList.remove("active")
);
