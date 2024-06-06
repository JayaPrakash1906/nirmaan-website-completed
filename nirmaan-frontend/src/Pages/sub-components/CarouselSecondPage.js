import React, { useState } from "react";
import { Swiper, SwiperSlide } from "swiper/react";

import "./carouselSecondPage.css";
import im1 from "../../images/app-data/8.png";
import im2 from "../../images/app-data/12.png";
import im3 from "../../images/app-data/14.png";
import im4 from "../../images/app-data/15.png";
import im5 from "../../images/app-data/16.png";
import im6 from "../../images/app-data/17.png";
import im7 from "../../images/app-data/21.png";
import im8 from "../../images/app-data/20.png";
import im10 from "../../images/app-data/22.png";
import im11 from "../../images/app-data/25.png";
import { Autoplay, Pagination, Navigation } from "swiper/modules";

function CarouselSecondPage() {
  const [swiperdDirection, setSwiperDirection] = useState(
    window.innerWidth < 1200 ? "horizontal" : "vertical"
  );
  const [isVertical, setIsVertical] = useState();

  let swiperRef = null;
  console.log("swiperdDirection", swiperdDirection);

  const handleSwiper = (swiper) => {
    swiperRef = swiper; // Assign the swiper instance to the swiperRef variable
    // Now that swiperRef is assigned, you can access its properties safely
    setSlidesOffset(swiper);
  };

  // const setSlidesOffset = (swiper) => {
  //   if (swiper) {
  //     const slideWidth = swiper.slides[0].offsetWidth; // Get the width of the first slide
  //     const offset = slideWidth / 2; // Calculate the offset (50% of slide width)
  //     swiper.params.slidesOffsetBefore = -offset; // Set the offset
  //     swiper.update(); // Update Swiper to reflect the changes
  //   }
  // };

  const setSlidesOffset = (swiper) => {
    if (swiper) {
      const isHorizontal = swiper.params.direction === "horizontal";

      const slideDimension = isHorizontal
        ? swiper.slides[0].offsetWidth // Get the width of the first slide
        : swiper.slides[0].offsetHeight; // Get the height of the first slide

      const offset = slideDimension / 5; // Calculate the offset (50% of slide width or height)
      console.log(
        "isHorizontal",
        isHorizontal,
        "slideDimension",
        slideDimension,
        "offset",
        offset
      );
      if (isHorizontal) {
        swiper.params.slidesOffsetBefore = -offset; // Set horizontal offset
        swiper.params.slidesOffsetAfter = offset; // Set horizontal offset after
      } else {
        swiper.params.slidesOffsetTop = -offset; // Set vertical offset
        swiper.params.slidesOffsetBottom = offset; // Set vertical offset bottom
      }

      swiper.on("slideChange", () => {
        const lastSlideIndex = swiper.slides.length - 1;
        const currentSlideIndex = swiper.activeIndex;
        if (lastSlideIndex - currentSlideIndex <= 4) {
          // Check if current slide is among the last three
          swiper.slideTo(0); // Restart Swiper by sliding to the first slide
        }
      });

      swiper.update(); // Update Swiper to reflect the changes
    }
  };

  return (
    <Swiper
      spaceBetween={20}
      slidesPerView={2}
      autoplay={{
        delay: 1500,
        disableOnInteraction: false,
      }}
      modules={[Autoplay, Pagination, Navigation]}
      navigation={true}
      // loop={true}
      // direction={''}
      direction={swiperdDirection}
      // direction={isVertical ? 'vertical' : 'horizontal'}
      onSwiper={handleSwiper}
      onSlideChange={() => console.log("slide change")}
      className="vertical-carousel-container"
    >
      <SwiperSlide>
        <div className="vertical-carousel__img-box">
          <img src={im1} />
        </div>
      </SwiperSlide>
      <SwiperSlide>
        <div className="vertical-carousel__img-box">
          <img src={im2} />
        </div>
      </SwiperSlide>
      <SwiperSlide>
        <div className="vertical-carousel__img-box">
          <img src={im3} />
        </div>
      </SwiperSlide>
      <SwiperSlide>
        <div className="vertical-carousel__img-box">
          <img src={im4} />
        </div>
      </SwiperSlide>
      <SwiperSlide>
        <div className="vertical-carousel__img-box">
          <img src={im5} />
        </div>
      </SwiperSlide>
      <SwiperSlide>
        <div className="vertical-carousel__img-box">
          <img src={im6} />
        </div>
      </SwiperSlide>
      <SwiperSlide>
        <div className="vertical-carousel__img-box">
          <img src={im7} />
        </div>
      </SwiperSlide>
      <SwiperSlide>
        <div className="vertical-carousel__img-box">
          <img src={im8} />
        </div>
      </SwiperSlide>
      <SwiperSlide>
        <div className="vertical-carousel__img-box">
          <img src={im10} />
        </div>
      </SwiperSlide>
      <SwiperSlide>
        <div className="vertical-carousel__img-box">
          <img src={im11} />
        </div>
      </SwiperSlide>
    </Swiper>
  );
}

export default CarouselSecondPage;
