import React, { useState } from "react";
import { motion } from "framer-motion";
import chessImg from "../../../images/chess.png";
import GalleryPopup from "../../sub-components/GalleryPopup";
import API_BASE_URL from "../../../config";

// const imgArr = Array.from({ length: 6 }, (_, index) => index);
function MediaSubComp({imgArray}) {
  const [imgCount, setImgCount] = useState(window.innerWidth < 576 ? 3 : 6)
  const [media, setMedia] = useState(imgArray);
  const [popupData, setPopupData] = useState({
    img: '',
    description: '',
    showPopup: false
  })  
  
  const handlePopup = (img, description) => {
    setPopupData({
      img,
      description,
      showPopup: true
    })
  }
  const handlePopupClose = () => {
    setPopupData({
      img: '',
      description: '',
      showPopup: false
    })
  }
  if(imgArray){
    return (
      <motion.div
        initial={{ opacity: 0 }}
        whileInView={{ opacity: 1 }}
        transition={{ duration: 1 }}
        exit={{ opacity: 1 }}
        className="media-sub-comp__list"
      >
        {popupData.showPopup && (
          <GalleryPopup
            img={popupData.img}
            description={popupData.description}
            closePopup={handlePopupClose}
            showPopup={popupData.showPopup} />
        )}
  
        {
          imgArray.map((img) => (
            <div className="media-sub-comp__img-box" onClick={() => handlePopup(API_BASE_URL+'/images/'+img, 'description')} key={img}>
              <img src={API_BASE_URL+'/images/'+img} />
            </div>
          ))
        }
  
      </motion.div>
    );
  }
  else{
    return (
      <motion.div
        initial={{ opacity: 0 }}
        whileInView={{ opacity: 1 }}
        transition={{ duration: 1 }}
        exit={{ opacity: 1 }}
        className="media-sub-comp__list"
      >
        {popupData.showPopup && (
          <GalleryPopup
            img={popupData.img}
            description={popupData.description}
            closePopup={handlePopupClose}
            showPopup={popupData.showPopup} />
        )}
        {/* {
          imgArray.map((ig) =>{
            return(
              <div className="media-sub-comp__img-box" onClick={() => handlePopup(chessImg, 'description')} key={ig}>
              <img src={'http://127.0.0.1:8000/api/images/'+ig} />
            </div>
            )
          })
        } */}
        {/* <div className="media-sub-comp__img-box" onClick={() => handlePopup(chessImg, 'description')}>
          <img src={chessImg} />
        </div>
  
        <div className="media-sub-comp__img-box" onClick={() => handlePopup(chessImg, 'description')}>
          <img src={chessImg} />
        </div>
  
        <div className="media-sub-comp__img-box" onClick={() => handlePopup(chessImg, 'description')}>
          <img src={chessImg} />
        </div>
  
        <div className="media-sub-comp__img-box" onClick={() => handlePopup(chessImg, 'description')}>
          <img src={chessImg} />
        </div>
  
        <div className="media-sub-comp__img-box" onClick={() => handlePopup(chessImg, 'description')}>
          <img src={chessImg} />
        </div>
  
        <div className="media-sub-comp__img-box" onClick={() => handlePopup(chessImg, 'description')}>
          <img src={chessImg} />
        </div> */}
  
      </motion.div>
    );
  }
}

export default MediaSubComp;
