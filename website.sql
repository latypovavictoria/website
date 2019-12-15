 /*create database*/
 CREATE DATABASE 'reg';
 /*create tables*/
 CREATE TABLE IF NOT EXISTS 'users' (
 'id' int(6) NOT NULL AUTO_INCREMENT ,
 'login' varchar(20) NOT NULL
 'pass' varchar(20) NOT NULL);
 
  CREATE TABLE IF NOT EXISTS 'comments' (
 'id' int(6) NOT NULL AUTO_INCREMENT ,
 'text2' varchar(30) NOT NULL
 'text1' varchar(200) NOT NULL,
 'text3' varchar(20) NOT NULL);
 
  /*create database*/
 CREATE DATABASE 'animal';
 /*create tables*/
 CREATE TABLE IF NOT EXISTS 'animal' (
 'id' int(6) NOT NULL AUTO_INCREMENT ,
 'text' varchar(450) NOT NULL);
  CREATE TABLE IF NOT EXISTS 'animal1' (
 'id' int(6) NOT NULL AUTO_INCREMENT ,
 'text' varchar(450) NOT NULL);
  CREATE TABLE IF NOT EXISTS 'animal2' (
 'id' int(6) NOT NULL AUTO_INCREMENT ,
 'text' varchar(450) NOT NULL);
 
  CREATE TABLE IF NOT EXISTS 'animal3' (
 'id' int(6) NOT NULL AUTO_INCREMENT ,
 'text' varchar(450) NOT NULL);
  CREATE TABLE IF NOT EXISTS 'animal4' (
 'id' int(6) NOT NULL AUTO_INCREMENT ,
 'text' varchar(450) NOT NULL);
  CREATE TABLE IF NOT EXISTS 'animal5' (
 'id' int(6) NOT NULL AUTO_INCREMENT ,
 'text' varchar(450) NOT NULL);
 
  CREATE TABLE IF NOT EXISTS 'animal6' (
 'id' int(6) NOT NULL AUTO_INCREMENT ,
 'text' varchar(450) NOT NULL);
  CREATE TABLE IF NOT EXISTS 'animal7' (
 'id' int(6) NOT NULL AUTO_INCREMENT ,
 'text' varchar(450) NOT NULL);
  CREATE TABLE IF NOT EXISTS 'text' (
 'id' int(6) NOT NULL AUTO_INCREMENT ,
 'text' varchar(10000) NOT NULL);
 
