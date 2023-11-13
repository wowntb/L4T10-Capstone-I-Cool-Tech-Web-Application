-- Here are the commands used to create the table for the articles of the website.
use laravel;
create table articles (
    id int,
    title varchar(100),
    content varchar(250),
    category varchar(20),
    tags varchar(100),
    creation_date date
);
-- Commands to populate the table with 5 articles have been included.
insert into articles
values(
        1,
        "The 7 Essential Web Development Tools",
        "Here is the list of the 7 essentail web dev tools that we have compiled:",
        "Web Development",
        "Sass, jQuery, VS Code, Sublime, GitHub",
        "2023-03-13"
    ),
    (
        2,
        "iPhone 15: Should You Buy?",
        "Here are some critical points that can heavily influence your decision to purchase the new iPhone:",
        "Smart Phones",
        "Apple, A16 Bionic, iPhone, iPhone 15, iPhone 15 Pro, iPhone 15 Pro Max",
        "2023-10-24"
    ),
    (
        3,
        "Samsung Galaxy S23: Price, specs, news, and features",
        "As usual, Samsung kicked off 2023 with the latest entries in its mainline flagship series.",
        "Smart Phones",
        "Samsung, Samsung Galaxy, Samsung Galaxy S23, Samsung Galaxy S23+, Samsung Galaxy S23 Ultra",
        "2023-05-18"
    ),
    (
        4,
        "5 reasons to get an AMD Ryzen CPU for your next PC",
        "Desktop processors of the Ryzen 7000 and Ryzen 7000X3D series are currently the talk of the town.",
        "Computers",
        "AMD, CPU, AMD Ryzen, Processors, PC",
        "2023-10-23"
    ),
    (
        5,
        "Enhancing Your PC Experience: The Roles of Peripherals",
        "In this article, we'll explore some of the ways that PC peripherals can expand the capabilities of a user's experience.",
        "Computers",
        "mouse, keyboard, peripherals, PC, monitor",
        "2023-01-10"
    ),
    (
        6,
        "Intel Processors Over the Years",
        "As the world leader in computer processing, Intel processors have a long and fascinating history.",
        "Computers",
        "Intel, CPU, PC, Processors",
        "2023-11-10"
    );
-- Indices are created so that the data can be retrieved quickly.
create index idx_category on articles (category);
create index idx_tags on articles (tags);
create index idx_creation_date on articles (creation_date);