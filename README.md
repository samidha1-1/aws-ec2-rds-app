#Created a project EC2 WEB APP IN - PRIVATE RDS IN CUSTOM VPC 

This is a small project that demonstrates :
-created a custom vpc with 2 subnets 
   .Publich subnet : Hosts the EC2 instance 
   .Private subnet : Hosts the RDS MYSQL databse 
-Configured security group to allow EC2-RDS communication 
-Connectig a php website hosted on EC2 to an AWS RDS MYSQL databse 
-Fetching and displaying user data 
 
#Architecture 

           +-------------------+
          |    Internet       |
          +---------+---------+
                    |
             [Internet Gateway]
                    |
          +---------v---------+
          |    Public Subnet  |
          |------------------|
          |   EC2 Instance    |
          |  (PHP Website)    |
          +---------+---------+
                    |
              [Security Group]
                    |
          +---------v---------+
          |   Private Subnet  |
          |------------------|
          |   RDS MySQL DB    |
          +------------------+


#Steps to run 
-Launched the EC2 instance in publich subnet 
-Launch the RDS MYSQL databse in private subnet 
-Configure security groups :
    -EC2 SG allow HTTP(80) access from the internet 
    -RDS SG allow MYSQL(3306) access only from EC2'S SG 
-Access the php website via EC2's public ip and verify database data is displayed


#Tools & Technologies
AWS EC2
AWS RDS (MySQL)
Custom VPC with public and private subnets
PHP & MySQL
Security Groups


