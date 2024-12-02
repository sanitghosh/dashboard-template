$(document).ready(function () {
    // Menu dropdown handling
    $("nav .nav-item a").on('click', function (e) {
        e.stopPropagation();
        $("nav .nav-item a").removeClass('active');
        $(this).addClass('active');
        $("nav .nav-item ul").collapse('hide')
    });

    // dropdown active
    $('.dropdown-menu li').click(function (e) {
        e.stopPropagation();
        $('.dropdown-menu li').removeClass('active');
        $(this).addClass('active');
        // window.location = $(this).attr('href');
    })

    // open submenu on reload
    let activeLink = $('nav ul li > a.active');
    if (activeLink.length > 0) {
        activeLink.attr('aria-expanded', 'true');
        $('#' + activeLink.attr('aria-controls')).addClass('show');
    }


    let $tds = $('.charLength strong');
    $tds.each(function () {
        let content = $(this).text().trim();
        if (content.length > 20) {
            $(this).attr({
                'data-bs-toggle': 'tooltip',
                'data-bs-placement': 'top',
                'data-bs-custom-class': 'custom-tooltip',
                'data-bs-title': content
            });
        }
    });

    // Initialize tooltips
    var tooltipTriggerList = $('[data-bs-toggle="tooltip"]');
    tooltipTriggerList.each(function (e) {
        console.log(e)
        return new bootstrap.Tooltip($(this)[0]);
    });


    // Sidebar collapse
    let spanSidebar = $(".spanSidebar");
    let leftSide = $(".dashboard-container .left");
    let rightSide = $(".dashboard-container .right");
    let footer = $('footer');

    spanSidebar.click(function () {
        $(leftSide).toggleClass("sidebarActive");
        $(spanSidebar).toggleClass('arrowIcon');
        if (leftSide.hasClass("sidebarActive")) {
            rightSide.css('margin-left', 0);
            spanSidebar.css('left', 15);
            footer.css('width', "100%");
        }
        else {
            rightSide.css('margin-left', 245);
            spanSidebar.css('left', 224);
            footer.css('width', "calc(100% - 245px)");
        }
    });


});

// For booking calendar
document.addEventListener('DOMContentLoaded', () => {
    const slotItems = document.querySelectorAll('.slot-status.selected');
    const calModal = document.querySelector('.calender-modal');
    const closeBtn = calModal.querySelector(".closeCalModal");

    slotItems.forEach((item) => {
        item.addEventListener("click", (event) => {
            const tabContent = event.currentTarget.querySelector(".table-content");
            if (tabContent) {
                calModal.classList.replace('d-none', 'd-block');
                tabContent.appendChild(calModal);
            }
        });
    });

    if (closeBtn) {
        closeBtn.addEventListener("click", (event) => {
            event.stopPropagation();
            calModal.classList.replace('d-block', 'd-none');
        });
    }
});




// Check
// const galleryUpload = document.querySelector(".gallery-upload");
// const galleryImgPreviews = document.querySelector(".gallery-list");

// const handleGalleryImages = (e) => {
//     const files = e.target.files;
//     let galleryHtml = "";

//     for (let item of files) {
//         galleryHtml += `
//             <li class="file-list-item">
//                 <div class="gallery-list-item">
//                     <img name="[]" src="${URL.createObjectURL(item)}" alt="${item.name}">
//                     <span class="name">${item.name}</span>
//                 </div>
//                 <i class="fa-solid fa-trash-can" title="Remove"></i>
//             </li>
//         `;
//     }
//     galleryImgPreviews.innerHTML += galleryHtml;
// };

// // Listeners for remove events using event delegation
// const handleGalleryImagesRemove = (event) => {
//     if (event.target.classList.contains("fa-trash-can")) {
//         event.target.closest("li").remove();
//     }
// };

// // Upload images
// galleryUpload.addEventListener("change", handleGalleryImages);

// // Event delegation for dynamically added trash icons
// galleryImgPreviews.addEventListener("click", handleGalleryImagesRemove);




