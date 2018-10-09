I.	INTRODUCTION:

In this project we analyzed, designed, and implemented, a database system application called Online Hotel Reservation System.With the requirements specified we extracted the entities and relationship between those entities and designed ER model and EER diagram for the same in the first two deliverables. 

In the final deliverable we have developed a full working application that interacts with the Hotel Hulton Database that is created.

II.    IMPLEMENTATION DETAILS:

●	Database used to access and store data for the application is MySQL database.
●	The programming language used is PHP for backend and HTML for frontend.
●	We have used WAMP (Windows, Apache, MySQL, PHP) server to implement this system and create an application.

III.  USER GUIDE:

1.    Customer Section
●	Customers Access the Application for Hulton Hotel Reservation through a Login Interface where if a Customer already has an account then he/she directly directed to hotel selection page to choose a specific hotel.
●	If the Customer is a new client then he/she has to fill a form to create a database record for ease of access in the future.
●	Two Customers with same usernames’ cannot exist in the system so a customer is warned from using the same username as any stored in the database.
●	After the Customer has logged in either old or new, they are prompted to select a hotel from the chain of hotels. Hotels are narrowed according to country or state and chosen based on these selection criterion.
●	After a Hotel is chosen, we are directed towards the booking section to book rooms in that hotel. The available rooms are highlighted in url links. We select rooms on the basis of clicking these links.
●	After selecting a room we have the option to select a breakfast type among the variety offered at that hotel. This is done similar to room selection.
●	After selecting a breakfast type we have the choice to select any of the varied services offered by the hotel by clicking on any service type we need.
●	After the entire reservation is done the customer is directed towards a payment screen where he has to enter his payment details and the reservation procedure is completed.
●	Customers can login to the application anytime to leave a review to room/rooms booked by them. They can leave a review for each of the breakfast type they had ordered. Also, they can write a review for each of the services they demanded during their stay.

2.    Admin Section
 
●	The admin section is restricted for the hotel employees/staff only.
●	The admin section is used to get feedbacks on various features of the hotel.
●	Average rating is calculated for each room type, breakfast type and service type for each hotel and the best in each category is found 
