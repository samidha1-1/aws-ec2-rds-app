 # EC2 Web App with Private RDS in Custom VPC

This project demonstrates how to host a PHP web application on an EC2 instance in a public subnet and securely connect it to a MySQL RDS instance running in a private subnet within a custom AWS VPC.

## Project Overview

- Created a custom VPC with two subnets:
  - **Public Subnet**: Hosts the EC2 instance
  - **Private Subnet**: Hosts the RDS MySQL database
- Configured security groups to allow secure EC2–RDS communication
- Connected a PHP website hosted on EC2 to an AWS RDS MySQL database
- Fetched and displayed user data from the database
  

## Architecture

      +-------------------+
      |     Internet      |
      +---------+---------+
                |
         [Internet Gateway]
                |
      +---------v---------+
      |   Public Subnet   |
      |------------------|
      |   EC2 Instance    |
      |  (PHP Website)    |
      +---------+---------+
                |
          [Security Group]
                |
      +---------v---------+
      |  Private Subnet   |
      |------------------|
      |   RDS MySQL DB    |
      +------------------+
     


## Steps to Run

1. Launch the EC2 instance in the public subnet.
2. Launch the RDS MySQL database in the private subnet.
3. Configure security groups:
   - EC2 Security Group: Allow HTTP (port 80) access from the internet
   - RDS Security Group: Allow MySQL (port 3306) access only from the EC2 security group
4. Deploy the PHP application on the EC2 instance.
5. Access the PHP website using the EC2 public IP and verify that database data is displayed.



## Tools & Technologies Used

- AWS EC2
- AWS RDS (MySQL)
- Custom VPC (Public & Private Subnets)
- PHP & MySQL
- Security Groups
 


