import React from "react";
import pic from "/storage/app/public/Png_Antarctican_Society.png";

export default function Header() {
    return (
        <div className="nav">
            <a href="https://www.antarctican.org/">
                <img
                    src={pic}
                    style={{ width: 400 }}
                    alt={"Antarctican Society Logo"}
                />
            </a>
            <p className="title_styling">ANTARCTICA SOCIETY ARCHIVE TIMELINE</p>
        </div>
    );
}
