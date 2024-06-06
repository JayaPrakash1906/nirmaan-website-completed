import React from 'react'
import './GalleryPopup.css'
function GalleryPopup({ img, description, closePopup }) {
  console.log(img, description, closePopup)
  return (
    <div className='gallery-popup'>
      <div className="gallery-popup__box">
        <button className="gallery-popup__close" onClick={closePopup}>
          X
        </button>
        <img src={img} alt="" />
        <div className="gallery-popup__description">
          {description}
        </div>
      </div>
    </div>
  )
}

export default GalleryPopup