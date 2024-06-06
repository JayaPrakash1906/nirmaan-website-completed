import React from 'react'
import './FifthScreenContent.css'
function FifthScreenContent({ text, name, subtitle }) {
  return (
    <div className="they-block">
      <div className="they-block__top">
        {text}
      </div>
      <div className="they-block__bottom">
        <p className="they-block__name">
          {name}
        </p>
        
        <p className="they-block__subtitle">
          {subtitle}
        </p>
      </div>
    </div>
  )
}

export default FifthScreenContent