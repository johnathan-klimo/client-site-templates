import React from "react";
import { Link } from "gatsby";
import { StaticImage } from "gatsby-plugin-image";
import NavbarDesktopMenuItems from "./navbarDesktopMenuItems";
import NavbarMobileMenuItems from "./navbarMobileMenuItems";

const Navbar = () => {
  return (
    <>
      <div className="container mx-auto max-w-7xl pt-4 px-4 2xl:px-0">
        <div>
          <header className="flex flex-wrap justify-between items-center">
            <Link to="/" className="flex">
              <StaticImage
                src="../images/20-09-09-New-Website-Logo-Retina-Desktop-v2.jpg"
                alt="Website Logo"
                loading="eager"
                className="w-[150px]"
              />
            </Link>
            <div className="max-lg:hidden">
              <NavbarDesktopMenuItems />
            </div>
            <div className="lg:hidden">
              <NavbarMobileMenuItems />
            </div>
          </header>
        </div>
      </div>
    </>
  );
};

export default Navbar;
