/* admin table */
CREATE TABLE Administrator(
	admin_id VARCHAR(10) NOT NULL,
	username VARCHAR(20),
	password VARCHAR(20),

	CONSTRAINT PK_Admin PRIMARY KEY (admin_id)
);

/* user table */
CREATE TABLE Registered_User(
	user_id VARCHAR(10) NOT NULL,
	first_name VARCHAR(20),
	last_name VARCHAR(20),
	email VARCHAR(30),
	password VARCHAR(20),
	gender VARCHAR(7),
	dob DATE,
	age INTEGER,
	type VARCHAR(10),

	CONSTRAINT PK_User PRIMARY KEY (user_id)
);

/* registered user contact number table */
CREATE TABLE Register_User_Contact(
	user_id VARCHAR(10) NOT NULL,
	tel_no VARCHAR(15),
	
	CONSTRAINT FK_Register_User_Contact FOREIGN KEY (user_id) REFERENCES Registered_User(user_id)
);

/* license table */
CREATE TABLE License(
	license_no VARCHAR(10) NOT NULL,  
	user_id VARCHAR(10), 
	admin_id VARCHAR(10),
	full_name VARCHAR(50), 
	license_type VARCHAR(15), 
	vehicle_type varchar(15), 
	issued_date DATE,

	CONSTRAINT PK_License PRIMARY KEY (license_no),
	CONSTRAINT FK1_License FOREIGN KEY (user_id) REFERENCES Registered_User(user_id),
	CONSTRAINT FK2_License FOREIGN KEY (admin_id) REFERENCES Administrator(admin_id)
);

/* payment table */
CREATE TABLE Payment(
	payment_id VARCHAR(10) NOT NULL,
	user_id VARCHAR(10), 
	admin_id VARCHAR(10), 
	payment_method VARCHAR(10),
	amount INTEGER,
	paid_date DATE, 
	paid_time TIME,

	CONSTRAINT PK_Payment PRIMARY KEY (payment_id),
	CONSTRAINT FK1_Payment FOREIGN KEY (user_id) REFERENCES Registered_User(user_id),
	CONSTRAINT FK2_Payment FOREIGN KEY (admin_id) REFERENCES Administrator(admin_id)
);

/* document table */
CREATE TABLE Document(
	document_id VARCHAR(10) NOT NULL, 
	user_id VARCHAR(10), 
	admin_id VARCHAR(10), 
	type VARCHAR(20), 
	status VARCHAR(10), 
	submitted_date DATE,

	CONSTRAINT PK_Document PRIMARY KEY (document_id),
	CONSTRAINT FK1_Document FOREIGN KEY (user_id) REFERENCES Registered_User(user_id),
	CONSTRAINT FK2_Document FOREIGN KEY (admin_id) REFERENCES Administrator(admin_id)
);

/* exam table */
CREATE TABLE Exam(
	exam_id VARCHAR(10) NOT NULL, 
	admin_id VARCHAR(10), 
	user_id VARCHAR(10), 
	exam_type VARCHAR(10),
	exam_date DATE,
	start_time TIME,
	end_time TIME,

	CONSTRAINT PK_Exam PRIMARY KEY (exam_id),
	CONSTRAINT FK1_Exam FOREIGN KEY (user_id) REFERENCES Registered_User(user_id),
	CONSTRAINT FK2_Exam FOREIGN KEY (admin_id) REFERENCES Administrator(admin_id)
);

/* results table */
CREATE TABLE Result(
	result_id VARCHAR(10), 
	exam_id VARCHAR(10), 
	status VARCHAR(10),

	CONSTRAINT PK_Result PRIMARY KEY (result_id),
	CONSTRAINT FK_Result FOREIGN KEY (exam_id) REFERENCES Exam(exam_id)
);

/* driving school table */
CREATE TABLE Driving_School(
	school_id VARCHAR(10) NOT NULL,  
	school_name VARCHAR(20), 
	email VARCHAR(30), 
	address VARCHAR(100), 
	password VARCHAR(20), 
	description VARCHAR(500),

	CONSTRAINT PK_Driving_School PRIMARY KEY (school_id)
);


/* course table */
CREATE TABLE Course(
	course_id VARCHAR(10), 
	school_id VARCHAR(10), 
	course_name VARCHAR(100), 
	course_fee INTEGER, 
	description VARCHAR(300), 
	published_date DATE, 
	duration VARCHAR(10)

	CONSTRAINT PK_Course PRIMARY KEY (course_id),
	CONSTRAINT FK_Couese FOREIGN KEY (school_id) REFERENCES Driving_School (school_id)
);

/* class table */
CREATE TABLE Class(
	class_id VARCHAR(10), 
	course_id VARCHAR(10), 
	user_id VARCHAR(10), 
	school_id VARCHAR(10), 
	start_time TIME, 
	end_time TIME, 
	class_date DATE,

	CONSTRAINT PK_Class PRIMARY KEY (class_id),
	CONSTRAINT FK1_Class FOREIGN KEY (course_id) REFERENCES Course(course_id),
	CONSTRAINT FK2_Class FOREIGN KEY (user_id) REFERENCES Registered_User(user_id),
	CONSTRAINT FK3_Class FOREIGN KEY (school_id) REFERENCES Driving_School(school_id)
);

/* inquiry table */
CREATE TABLE Inquiry(
	reference_id VARCHAR(10), 
	user_id VARCHAR(10),  
	subject VARCHAR(30), 
	description VARCHAR(200), 
	inquired_date DATE,

	CONSTRAINT PK_Inquiry PRIMARY KEY (reference_id), 
	CONSTRAINT FK_Inquiry FOREIGN KEY (user_id) REFERENCES Registered_User(user_id)
);

/* inquiry handle table */
CREATE TABLE Inquiry_Handle(
	reference_id VARCHAR(10), 
	admin_id VARCHAR(10), 
	handled_date DATE,

	CONSTRAINT PK_Inquiry_Handle PRIMARY KEY (reference_id, admin_id),
	CONSTRAINT FK_Inquiry_Handle FOREIGN KEY (admin_id) REFERENCES Administrator(admin_id)

);

/* faq table */
CREATE TABLE FAQ(
	admin_id VARCHAR(10), 
	question VARCHAR(100),  
	answer VARCHAR(300),

	CONSTRAINT PK_FAQ PRIMARY KEY (admin_id, question),
	CONSTRAINT FK_FAQ FOREIGN KEY (admin_id) REFERENCES Administrator(admin_id)
);