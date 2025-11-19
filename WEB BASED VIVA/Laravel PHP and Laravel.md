### 🧩 **Basic PHP Questions**

1. **What is the difference between `include` and `require` in PHP?**  
   Both are used to include files, but `require` throws a fatal error if the file is missing, while `include` only throws a warning.

2. **What are superglobals in PHP?**  
   Built-in variables like `$_GET`, `$_POST`, `$_SESSION`, `$_SERVER` that are accessible from anywhere in the script.

3. **What is the difference between `==` and `===` in PHP?**  
   `==` checks value only, `===` checks both value and type.

4. **How does PHP handle sessions?**  
   PHP uses `$_SESSION` to store user data across multiple pages. Sessions are started with `session_start()`.

5. **What is the use of `isset()` and `empty()`?**
    - `isset()` checks if a variable is set and not null.
    - `empty()` checks if a variable is empty (like `0`, `""`, `null`, etc.).

---

### ⚙️ **Laravel-Specific Questions**

6. **What is Laravel?**  
   Laravel is a PHP framework that follows the MVC (Model-View-Controller) pattern and provides tools for routing, authentication, ORM, and more.

7. **What is Artisan in Laravel?**  
   Artisan is Laravel’s command-line interface used for tasks like creating controllers, migrations, and running scheduled jobs.

8. **What is Eloquent ORM?**  
   Eloquent is Laravel’s built-in ORM that allows you to interact with the database using models and expressive syntax.

9. **How do you define a route in Laravel?**  
   In `routes/web.php`:
   ```php
   Route::get('/home', [HomeController::class, 'index']);
   ```

10. **What is a migration in Laravel?**  
    A migration is a version-controlled way to manage database schema changes using PHP code.

11. **What is middleware in Laravel?**  
    Middleware filters HTTP requests entering your application. Example: `auth` middleware checks if the user is authenticated.

12. **How do you validate form data in Laravel?**  
    Using the `validate()` method in a controller:
   ```php
   $request->validate([
       'email' => 'required|email',
       'password' => 'required|min:6'
   ]);
   ```

13. **What is the purpose of `.env` file in Laravel?**  
    It stores environment-specific configuration like database credentials, app key, and debug mode.

14. **What is CSRF protection in Laravel?**  
    Laravel automatically protects against Cross-Site Request Forgery by including a CSRF token in forms.

15. **How do you create a controller in Laravel?**  
    Using Artisan:
   ```bash
   php artisan make:controller UserController
   ```
---

### Advance Questions 
---

### 🧠 **Advanced Laravel & PHP Viva Questions with Answers**

1. **What is the difference between `singleton()` and `bind()` in Laravel's service container?**
    - `singleton()` registers a class so that only one instance is ever created.
    - `bind()` creates a new instance every time it is resolved.

2. **Explain the Repository Pattern in Laravel. Why and when would you use it?**  
   It abstracts the data layer, allowing you to swap out Eloquent for another data source without changing business logic. It promotes separation of concerns and testability.

3. **How does Laravel handle dependency injection internally?**  
   Laravel uses reflection to inspect constructor parameters and automatically resolves dependencies from the service container.

4. **What is Laravel Horizon and when should you use it?**  
   Horizon provides a dashboard and code-driven configuration for managing Laravel queues. Use it when you need real-time monitoring of job processing.

5. **How does Laravel handle rate limiting?**  
   Laravel uses middleware like `ThrottleRequests` and the `RateLimiter` facade to define request limits per user/IP.

---

### 🧱 **Database & Eloquent**

6. **What is the difference between `hasOneThrough` and `hasManyThrough` relationships?**
    - `hasOneThrough`: One-to-one relationship through an intermediate model.
    - `hasManyThrough`: One-to-many relationship through an intermediate model.

7. **How do you prevent N+1 query problems in Eloquent?**  
   Use `with()` or `load()` to eager load relationships.

8. **What is model caching and how can it improve performance?**  
   Caching frequently accessed model data (e.g., with `remember()` or Laravel Cache) reduces database load and speeds up response time.

---

### 🔐 **Security & Testing**

9. **How does Laravel handle password hashing?**  
   Laravel uses the `Hash` facade, which defaults to Bcrypt or Argon2 depending on configuration.

10. **What are Laravel Gates and Policies?**
- **Gates**: Closures that determine if a user can perform an action.
- **Policies**: Classes that organize authorization logic around a model.

11. **How do you write a feature test for a protected route in Laravel?**  
    Use `actingAs()` to simulate an authenticated user and assert the response:
   ```php
   $this->actingAs(User::factory()->create())
        ->get('/dashboard')
        ->assertStatus(200);
   ```

---

### ⚙️ **Architecture & Optimization**

12. **What is Laravel Octane and how does it improve performance?**  
    Octane boots Laravel once and keeps it in memory using Swoole or RoadRunner, drastically improving response times.

13. **How do you handle multi-tenancy in Laravel?**  
    Strategies include:
- Separate databases per tenant
- Shared database with tenant ID
- Use packages like `tenancy/tenancy` or `spatie/laravel-multitenancy`

14. **What is the difference between `dispatch()` and `dispatchNow()` in Laravel?**
- `dispatch()`: Queues the job for asynchronous execution.
- `dispatchNow()`: Executes the job immediately in the current request cycle.

15. **How do you implement custom Blade directives?**  
    Use `Blade::directive()` in a service provider:
   ```php
   Blade::directive('datetime', function ($expression) {
       return "<?php echo ($expression)->format('m/d/Y H:i'); ?>";
   });
   ```
---


