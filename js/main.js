  /* When the user clicks on the button, 
  toggle between hiding and showing the dropdown content */
  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(e) {
    if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
    }
  }
          // Modal
          var modal = document.getElementById("myModal");
          var btn = document.getElementById("cart");
          var close = document.getElementsByClassName("close")[0];
          var close_footer = document.getElementsByClassName("close-footer")[0];
          var order = document.getElementsByClassName("order")[0];
          btn.onclick = function () {
            modal.style.display = "block";
          }
          close.onclick = function () {
            modal.style.display = "none";
          }
          close_footer.onclick = function () {
            modal.style.display = "none";
          }
          order.onclick = function () {
            alert("Xác Nhận Thanh Toán Giỏ Hàng Của Bạn!!")

          }
          window.onclick = function (event) {
            if (event.target == modal) {
              modal.style.display = "none";
            }
          }
          var remove_cart = document.getElementsByClassName("btn-danger");
          for (var i = 0; i < remove_cart.length; i++) {
            var button = remove_cart[i]
            button.addEventListener("click", function () {
              var button_remove = event.target
              button_remove.parentElement.parentElement.remove()
            })
          }
          // update cart 
          function updatecart() {

              let elList = document.querySelectorAll('.cart-row');
              let result = 0;
              for (let i in elList) {
                if (i == 0) {
                  continue
                }
                if (i == 'entries') {
                  break;
                }
                let innterText = elList[i].querySelector('.cart-price').innerText;
                let price$ = innterText.split(' ')[innterText.split(' ').length - 1];
                let price = price$.split('$')[0];
                result += Number(price);
              }
              let elTotal = document.querySelector('.cart-total-price');
              if (elTotal != null) {
                elTotal.innerText = result + " $";
              }
            }
  // thay đổi số lượng sản phẩm
  var quantity_input = document.getElementsByClassName("cart-quantity-input");
  for (var i = 0; i < quantity_input.length; i++) {
    var input = quantity_input[i];
    input.addEventListener("change", function (event) {
      var input = event.target
      if (isNaN(input.value) || input.value <= 0) {
        input.value = 1;
      }
      updatecart()
    })
  }
  // Thêm vào giỏ
  var add_cart = document.getElementsByClassName("btn-add");
  for (var i = 0; i < add_cart.length; i++) {
    var add = add_cart[i];
    add.addEventListener("click", function (event) {
  
      var button = event.target;
      var product = button.parentElement.parentElement;
      var img = product.parentElement.getElementsByClassName("image-products")[0].src
      var title = product.getElementsByClassName("products-name")[0].innerText
      var price = product.getElementsByClassName("product-price")[0].innerText
      addItemToCart(title, price, img)
      // Khi thêm sản phẩm vào giỏ hàng thì sẽ hiển thị modal
      // modal.style.display = "block";
      
      updatecart()
    })
  }
  
  function addItemToCart(title, price, img) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cart_title = cartItems.getElementsByClassName('cart-item-title')
    for (var i = 0; i < cart_title.length; i++) {
      if (cart_title[i].innerText == title) {
        alert('Sản Phẩm Đã Có Trong Giỏ Hàng')
        return
      }
    }
  
    var cartRowContents = `
    <div class="cart-item cart-column">
        <img class="cart-item-image" src="${img}" width="100" height="100">
        <span class="cart-item-title">${title}</span>
    </div>
    <span class="cart-price cart-column">${price}</span>
    <div class="cart-quantity cart-column">
        <input class="cart-quantity-input" type="number" value="1">
        <button class="btn btn-danger" type="button">Xóa</button>
    </div>`
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', function () {
      var button_remove = event.target
      button_remove.parentElement.parentElement.remove()
      updatecart()
    })
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', function (event) {
      var input = event.target
      if (isNaN(input.value) || input.value <= 0) {
        input.value = 1;
      }
      updatecart()
    })
  }
  //Tks For your order_aleart 
  function checkout_success(){
    alert("Bạn Đã Thanh Toán Thành Công!!!");
  }