---

### 🧠 **HTML & CSS**

1. **What is HTML?**  
   HTML (HyperText Markup Language) is the standard language for creating web pages and web applications.

2. **What are semantic HTML elements?**  
   These are elements that clearly describe their meaning in a human- and machine-readable way (e.g., `<article>`, `<section>`, `<nav>`).

3. **What is the difference between `<div>` and `<span>`?**  
   `<div>` is a block-level element, while `<span>` is inline. Both are used for grouping content.

4. **What is the purpose of CSS?**  
   CSS (Cascading Style Sheets) is used to style and layout web pages, including colors, fonts, and spacing.

5. **Difference between ID and Class in CSS?**  
   ID is unique and used once per page (`#id`), while class can be reused (`.class`).

---

### ⚙️ **JavaScript**

6. **What is JavaScript?**  
   JavaScript is a scripting language used to create dynamic and interactive effects within web browsers.

7. **What is the difference between `==` and `===`?**  
   `==` compares values after type coercion, while `===` compares both value and type.

8. **What is the DOM?**  
   The Document Object Model represents the structure of a web page, allowing scripts to access and manipulate elements.

9. **What is an event in JavaScript?**  
   An event is an action that occurs in the browser, like a click or keypress, which can trigger JavaScript code.

10. **What is the use of `addEventListener()`?**  
    It attaches an event handler to an element without overwriting existing event handlers.

---

### 🧩 **Frameworks & Tools**

11. **What is Bootstrap?**  
    A popular CSS framework for building responsive and mobile-first websites.

12. **What is the role of Webpack?**  
    Webpack is a module bundler that compiles JavaScript modules and assets for deployment.

13. **What is the difference between React and Vue.js?**  
    React is a library focused on UI components, while Vue is a progressive framework with built-in features like routing and state management.

14. **What is the purpose of `npm`?**  
    `npm` (Node Package Manager) is used to manage JavaScript packages and dependencies.

15. **What is AJAX?**  
    AJAX (Asynchronous JavaScript and XML) allows web pages to update asynchronously by exchanging data with a server behind the scenes.


----

### 🔐 **Security & Performance**

1. **What is Cross-Site Scripting (XSS) and how can it be prevented?**  
   XSS is a vulnerability where attackers inject malicious scripts into content from otherwise trusted websites. It can be prevented using input sanitization, output encoding, and setting proper HTTP headers like `Content-Security-Policy`.

2. **What is the difference between SSR and CSR?**
    - **SSR (Server-Side Rendering):** HTML is rendered on the server and sent to the client. Improves SEO and initial load time.
    - **CSR (Client-Side Rendering):** JavaScript renders content in the browser. Faster interactions after initial load.

3. **How do you optimize a web application for performance?**
    - Minify CSS/JS
    - Use lazy loading
    - Implement caching strategies
    - Use a CDN
    - Optimize images and use modern formats like WebP

---

### ⚙️ **Advanced JavaScript & Frameworks**

4. **What is a closure in JavaScript?**  
   A closure is a function that retains access to its lexical scope even when executed outside of that scope.

5. **What is the Virtual DOM and how does it work?**  
   The Virtual DOM is a lightweight copy of the real DOM. Frameworks like React use it to batch and optimize DOM updates by comparing changes (diffing) and applying only the necessary updates.

6. **Explain the concept of reactivity in Vue/Nuxt.**  
   Reactivity in Vue is achieved through proxies that track dependencies. When reactive data changes, Vue automatically updates the DOM.

7. **What is tree shaking in modern JavaScript bundlers?**  
   Tree shaking is the process of removing unused code during the build process to reduce bundle size.

---

### 🧱 **Architecture & APIs**

8. **What is REST and how does it differ from GraphQL?**
    - **REST:** Uses multiple endpoints for different resources.
    - **GraphQL:** Uses a single endpoint and allows clients to specify exactly what data they need.

9. **What is CORS and why is it important?**  
   CORS (Cross-Origin Resource Sharing) is a security feature that restricts web pages from making requests to a different domain than the one that served the web page. It’s controlled via HTTP headers.

10. **What is middleware in web frameworks like Express or Laravel?**  
    Middleware functions intercept requests and responses. They’re used for tasks like authentication, logging, and request transformation.

---

### 🧪 **Testing & Deployment**

11. **What is unit testing vs integration testing?**
- **Unit testing:** Tests individual components or functions.
- **Integration testing:** Tests how multiple components work together.

12. **What is CI/CD in web development?**  
    CI/CD (Continuous Integration/Continuous Deployment) automates testing and deployment. It ensures code changes are tested and deployed quickly and reliably.

13. **What are webhooks and how are they used?**  
    Webhooks are HTTP callbacks triggered by events. They’re used to notify external systems in real-time (e.g., payment confirmation from Stripe).

---

