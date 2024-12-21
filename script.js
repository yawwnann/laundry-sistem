document.addEventListener("DOMContentLoaded", function () {
  var packageList = document.getElementById("package-list");
  var orderForm = document.getElementById("order-form");

  // Mengirim orderan ke file .txt
  orderForm.addEventListener("submit", function (event) {
    event.preventDefault();
    var name = document.getElementById("name").value;
    var selectedPackage = document.getElementById("package").value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "process_order.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        alert("Order berhasil dikirim!");
        orderForm.reset();
      }
    };
    xhr.send(
      "name=" +
        encodeURIComponent(name) +
        "&package=" +
        encodeURIComponent(selectedPackage)
    );
  });
});
