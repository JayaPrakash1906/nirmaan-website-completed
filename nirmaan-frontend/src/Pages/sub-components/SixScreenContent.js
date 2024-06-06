import React from 'react'
import './SixScreenContent.css'


function SixScreenContent({ title, img, alt, text }) {
  return (
    <div className="event-block">
      <h2 className="event-block__title">
        {title}
      </h2>
      <div className="event-block__box">
        <img src={img} alt={alt} className="event-block__img" />
      </div>
      <p className="event-block__text">
        {text}
      </p>
    </div>
  )
}

export default SixScreenContent