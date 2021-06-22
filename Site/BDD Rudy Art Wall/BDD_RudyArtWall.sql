/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  20/06/2021 23:22:54                      */
/*==============================================================*/


drop table if exists CATEGORIES;

drop table if exists PHOTOGRAPHE;

drop table if exists PHOTOS;

drop table if exists TECHNIQUES;

drop table if exists USERS;

/*==============================================================*/
/* Table : CATEGORIES                                           */
/*==============================================================*/
create table CATEGORIES
(
   ID_CATEGORIES        int not null,
   NOM_CATEGORIES       varchar(100) not null,
   DESCRIPTION_COURTE_CATEGORIES varchar(255) not null,
   DESCRIPTION_LONGUE_CATEGORIES text not null,
   IMAGE_LOGO_CATEGORIES varchar(255) not null,
   primary key (ID_CATEGORIES)
);

/*==============================================================*/
/* Table : PHOTOGRAPHE                                          */
/*==============================================================*/
create table PHOTOGRAPHE
(
   ID_PHOTOGRAPHE       int not null,
   NOM_PHOTOGRAPHE      varchar(100) not null,
   PRENOM_PHOTOGRAPHE   varchar(100) not null,
   EMAIL_PHOTOGRAPHE    varchar(255) not null,
   AVATAR_PHOTOGRAPHE   varchar(255),
   DESCRIPTION_PHOTOGRPAHE text not null,
   primary key (ID_PHOTOGRAPHE)
);

/*==============================================================*/
/* Table : PHOTOS                                               */
/*==============================================================*/
create table PHOTOS
(
   ID_PHOTOS            int not null,
   ID_CATEGORIES        int not null,
   ID_TECHNIQUES        int not null,
   ID_PHOTOGRAPHE       int not null,
   URL_PHOTOS           text not null,
   TITRE_PHOTOS         varchar(100) not null,
   EXIF_DIMENSIONS_PHOTOS varchar(20),
   EXIF_DATE_PHOTOS     date,
   EXIF_SPEED_PHOTOS    varchar(10),
   EXIF_APPERTURE_PHOTOS varchar(10),
   EXIF_ISO_PHOTOS      varchar(5),
   EXIF_FOCALE_PHOTOS   varchar(10),
   EXIF_OBJECTIF_PHOTOS varchar(255),
   EXIF_CAM_PHOTOS      varchar(255),
   primary key (ID_PHOTOS)
);

/*==============================================================*/
/* Table : TECHNIQUES                                           */
/*==============================================================*/
create table TECHNIQUES
(
   ID_TECHNIQUES        int not null,
   NOM_TECHNIQUES       varchar(100) not null,
   DESCRIPTION_COURTE_TECHNIQUES varchar(255) not null,
   DESCRIPTION_LONGUE_TECHNIQUES text not null,
   IMAGE_LOGO_TECHNIQUES varchar(255) not null,
   primary key (ID_TECHNIQUES)
);

/*==============================================================*/
/* Table : USERS                                                */
/*==============================================================*/
create table USERS
(
   ID_USERS             int not null,
   LOGIN_USERS          varchar(100) not null,
   PASS_USERS           varchar(255) not null,
   ROLE_USERS           varchar(100) not null,
   primary key (ID_USERS)
);

alter table PHOTOS add constraint FK_APPARTENIR foreign key (ID_CATEGORIES)
      references CATEGORIES (ID_CATEGORIES) on delete restrict on update restrict;

alter table PHOTOS add constraint FK_SHOOTER foreign key (ID_PHOTOGRAPHE)
      references PHOTOGRAPHE (ID_PHOTOGRAPHE) on delete restrict on update restrict;

alter table PHOTOS add constraint FK_UTILISER foreign key (ID_TECHNIQUES)
      references TECHNIQUES (ID_TECHNIQUES) on delete restrict on update restrict;

