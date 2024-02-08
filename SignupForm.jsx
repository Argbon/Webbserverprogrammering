import React from 'react';
import './SignupForm.css';

import {FaUser, FaLock, FaMailBulk} from "react-icons/fa";
import user_icon from '../Assets/person6.png';
import email_icon from '../Assets/email.png';
import password_icon from '../Assets/password.png';

const SignupForm = () => {

    return (

        <div className='container'>

            <div className="header">

                <div className="text">Sign Up</div>
                <div className="underline"></div>

            </div>

            <div className="inputs">
                <div className="input">
                    <FaUser className='icon'/>
                    <input type="text" placeholder='Name'/>
                </div>

                <div className="input">
                    <FaMailBulk className='icon'/>
                    
                    <input type="email" placeholder='Email'/>
                </div>

                <div className="input">
                    <FaLock className='icon'/>
                    <input type="password" placeholder='Password'/>
                </div>
            </div>
            <div className="undertext">Already have an account? <a href="/LoginForm">Login</a></div>
            <div className="undertext">Lost Password? <a>Click Here!</a></div>
            <div className="submit-container">
                <div className="submit">Sign Up</div>
            </div>

        </div>

    )
}

export default SignupForm;