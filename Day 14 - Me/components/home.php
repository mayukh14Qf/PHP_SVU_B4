<style>
    main {
        padding: 20px;
    }

    p {
        line-height: 1.5;
    }

    #hero {
        width: 100%;
        height: 400px;
        overflow: hidden;
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        gap: 10px;
        background-image: url("https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
    }

    section{
        margin-top: 20px;
    }

    #hero p {
        color: white;
        font-size: 30px;
        font-weight: bold;
        text-shadow: 2px 2px 4px #000000;
    }

    table {
        width: fit-content%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid black;
        padding: 10px;
    }

</style>

<!-- Hero Section -->
<div id="hero">
    <p>Daily PHP Classes</p>
    <p>For the students of SVU</p>
</div>

<main>
    <section>
        <h1>Home</h1>
        <p>Welcome to our home page</p>
        <p>Here you can find all the information about our daily class</p>
        <p>Feel free to contact us if you have any questions</p>
        <p>Thank you for visiting our website</p>
    </section>
    <section>
        <h1>Time table</h1>
        <p>Here is the time table for the classes</p>
        <table>
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Time</th>
                    <th>Subject</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mon-Wed</td>
                    <td>2:00 - 4:00</td>
                    <td>PHP Language</td>
                </tr>
                <tr>
                    <td>Thu-Sat</td>
                    <td>2:00 - 4:00</td>
                    <td>PHP - Web Development Oriented</td>
            </tbody>
        </table>
    </section>
    <section>
        <h1>Our Services</h1>
        <p>Here are some of the services we offer</p>
        <ul>
            <li>PHP Classes</li>
            <li>Web Development</li>
            <li>Web Design</li>
            <li>SEO</li>
            <li>Online Marketing</li>
        </ul>
    </section>
    

</main>