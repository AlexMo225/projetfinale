document.addEventListener("DOMContentLoaded", function() {
    const navLinks = document.querySelectorAll(".nav-list li a");
  
    navLinks.forEach(function(link) {
      link.addEventListener("click", function(event) {
        event.preventDefault();
  
        const currentActive = document.querySelector(".nav-list li a.active");
        if (currentActive) {
          currentActive.classList.remove("active");
        }
  
        this.classList.add("active");
      });
    });
  });

  
  