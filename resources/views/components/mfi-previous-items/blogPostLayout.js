import React from "react";
import { GatsbyImage } from "gatsby-plugin-image";
import Navbar from "./navbar";
import Sidebar from "./sidebar";
import Footer from "./footer";
import * as styles from "./blogPostLayout.module.css";

const BlogPostLayout = ({ postTitle, postHero, postDate, postAuthor, children }) => {
  return (
    <div>
      <Navbar />
      <div className="mt-8">
        <div className={styles.blogPostHeroContainer}>
          <GatsbyImage
            image={postHero}
            alt="Blog Post Hero Image"
            loading="eager"
            layout="fullWidth"
            className={styles.blogPostHeroImage}
          />
          <div className={styles.blogPostHeroImageOverlay}></div>
          <div className={styles.blogPostHeroTextOverlayContainer}>
            <div className={styles.blogPostHeroCategoryAndTitle}>
              <h1 className="font-mfi-alternate text-3xl md:text-4xl lg:text-5xl text-white text-center mb-4 px-4 md:px-6 lg:px-[100px]">{postTitle}</h1>
              <h2 className="font-mfi-alternate text-base lg:text-xl text-white text-center">
                {postDate} by {postAuthor}
              </h2>
            </div>
          </div>
        </div>
      </div>
      <div className="container mx-auto max-w-7xl mt-8 prose prose-headings:font-mfi-alternate prose-headings:font-normal prose-a:text-mfi-orange hover:prose-a:text-mfi-blue prose-a:no-underline">
        <div>
          <div className="lg:grid lg:grid-cols-[auto_340px]">
            <div className="px-4 lg:px-12">
              <main>{children}</main>
            </div>
            <div className="max-lg:hidden">
              <aside>
                <Sidebar />
              </aside>
            </div>
          </div>
        </div>
      </div>
      <Footer />
    </div>
  );
};

export default BlogPostLayout;

/*

Initial code:

<div className="container mx-auto max-w-7xl mt-8 prose">
        <div>
          <div>
            <GatsbyImage image={postHero} alt="Blog Post Hero Image" loading="eager" />
            <div></div>
            <div>
              <div>
                <div>
                  <h1>{postTitle}</h1>
                  <h2>
                    {postDate} by {postAuthor}
                  </h2>
                </div>
              </div>
            </div>
          </div>
          <div className="grid grid-cols-[auto_340px]">
            <div className="px-12">
              <main>{children}</main>
            </div>
            <div>
              <aside>
                <Sidebar />
              </aside>
            </div>
          </div>
        </div>
      </div>
      <Footer />
    </div>


*/