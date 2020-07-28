# ebookstore
Class project of Database Systems(2019-2020, autumn), completed by a group of three.
This project is mainly written in PHP and SQL (also HTML and CSS for the interface).
First, we start from E-R graphs(describing the interaction between different entities such as books and authors) and design database schema based on relational database theory.
We make sure that the database can support basic book transaction.
Then, we build a database in WAMP, which contains about 50 books.
Finally, we create prototypes of the ebookstore website.

Hightlights:
Both customers, bookshop owners and employees can log into this integrated system. For customers, they can view the information of books, purchase new books, and so on. For employees, they can manage the stock of the stores (purchasing new books, selling some of the books, getting books from the other shops, etc.). For bookshop owners, they can manage their employees, as well as receive a financial summary.
Actually, we were only able to finish the most important parts we designed in the first place. This is mainly due to the lack of time, and also because the workload was relatively large for each of our group members (most groups had 4 members to finish the class project, but a classmate who was formerly in our group chose to withdraw from the course).
I was mainly working on the "customer" part of this project, such as the homepage, user center for customers(where they can view past purchases,  purchase new books, and more), a basic search engine, etc. 
The search engine used a vector space model(based on tf-idf) to retrieve suitable books for customers. The vector space model is suitable for sorting results, especially when there are a large number of resorts.
I also calculated cosine of word vectors of books to evaluate the similarity between books. This result was used in two ways: to recommend similar books for customers based on their purchase history; to show similar books on the specific book page, which encourages customers to browse the bookshop through hyperlinks.
We also bundled best-sellers with unpopular books and offer a discount for customers, in an attempt to sell more books. These discounts are considered for when customers decide to purchase new books.

*Note that the xdr_b.class.php was downloaded from the web(with a small modification). It is a word segmentation tool for Chinese in the PHP language. Search SCWS to learn more about it. Although this package is a little out of date, it works well with PHP (jieba is more suited for Python).
