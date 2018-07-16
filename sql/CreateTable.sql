CREATE TABLE `MstAreas`(
    `Id` INT NOT NULL,
    `Name` VARCHAR(100) NOT NULL,
    `DateCreated` DATETIME NOT NULL,
    `LastUpdated` TIMESTAMP DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT PRIMARY KEY (`Id`)
) ENGINE = InnoDB;

CREATE TABLE `MstStates`(
    `Id` INT NOT NULL,
    `Name` VARCHAR(100) NOT NULL,
    `AreaId` INT NOT NULL,
    `DateCreated` DATETIME NOT NULL,
    `LastUpdated` TIMESTAMP DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT PRIMARY KEY (`Id`),
    CONSTRAINT FOREIGN KEY (`AreaId`) REFERENCES `MstAreas`(`Id`)
) ENGINE = InnoDB;

CREATE TABLE `MstCities`(
    `Id` INT NOT NULL,
    `Name` VARCHAR(100) NOT NULL,
    `StateId` INT NOT NULL,
    `Zip1` CHAR(3) NOT NULL,
    `Zip2` CHAR(4) NOT NULL,
    `IsValid` BOOLEAN DEFAULT TRUE NOT NULL,
    `DateCreated` DATETIME NOT NULL,
    `LastUpdated` TIMESTAMP DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT PRIMARY KEY (`Id`),
    CONSTRAINT FOREIGN KEY (`StateId`) REFERENCES `MstStates`(`Id`)
) ENGINE = InnoDB;

CREATE TABLE `MstTaxRoundTypes`(
    `Id` INT NOT NULL,
    `Name` VARCHAR(10),
    CONSTRAINT PRIMARY KEY (`Id`)
) ENGINE = InnoDB;

CREATE TABLE `MstCalcTargetTypes`(
    `Id` INT NOT NULL,
    `Name` VARCHAR(10),
    CONSTRAINT PRIMARY KEY (`Id`)
) ENGINE = InnoDB;

CREATE TABLE `Clients`(
    `Id` INT NOT NULL AUTO_INCREMENT,
    `AccountName` VARCHAR(20) NOT NULL,
    `CompanyName` VARCHAR(100) NOT NULL,
    `CompanyNameFurigana` VARCHAR(100) NOT NULL,
    `ContactSurname` VARCHAR(100) NOT NULL,
    `ContactForename` VARCHAR(100) NOT NULL,
    `ContactSurnameFurigana` VARCHAR(100) NOT NULL,
    `ContactForenameFurigana` VARCHAR(100) NOT NULL,
    `Zip1` CHAR(3) NOT NULL,
    `Zip2` CHAR(4) NOT NULL,
    `StateId` INT,
    `CityId` INT,
    `City` VARCHAR(255),
    `Street` VARCHAR(255),
    `PhoneNumber1` VARCHAR(20) NOT NULL DEFAULT '',
    `PhoneNumber2` VARCHAR(20) NOT NULL DEFAULT '',
    `PhoneNumber3` VARCHAR(20) NOT NULL DEFAULT '',
    `FaxNumber1` VARCHAR(20) DEFAULT '',
    `FaxNumber2` VARCHAR(20) DEFAULT '',
    `FaxNumber3` VARCHAR(20) DEFAULT '',
    `MailAddress` VARCHAR(255) NOT NULL,
    `BillCompanyName` VARCHAR(100),
    `BillCompanyNameFurigana` VARCHAR(100),
    `BillContactSurname` VARCHAR(100),
    `BillContactForename` VARCHAR(100),
    `BillContactSurnameFurigana` VARCHAR(100),
    `BillContactForenameFurigana` VARCHAR(100),
    `BillZip1` CHAR(3),
    `BillZip2` CHAR(4),
    `BillStateId` INT,
    `BillCityId` INT,
    `BillCity` VARCHAR(255),
    `BillStreet` VARCHAR(255),
    `BillPhoneNumber1` VARCHAR(20) DEFAULT '',
    `BillPhoneNumber2` VARCHAR(20) DEFAULT '',
    `BillPhoneNumber3` VARCHAR(20) DEFAULT '',
    `BillFaxNumber1` VARCHAR(20) DEFAULT '',
    `BillFaxNumber2` VARCHAR(20) DEFAULT '',
    `BillFaxNumber3` VARCHAR(20) DEFAULT '',
    `BillMailAddress` VARCHAR(255),
    `TaxRoundTypeId` INT NOT NULL DEFAULT -1,
    `CalcTargetTypeId` INT NOT NULL DEFAULT 1,
    `IsEnabled` BOOLEAN NOT NULl DEFAULT TRUE,
    `IsValid` BOOLEAN NOT NULL DEFAULT TRUE,
    `Version` INT DEFAULT 0,
    `DateCreated` DATETIME NOT NULL,
    `LastUpdated` TIMESTAMP DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT PRIMARY KEY (`Id`),
    CONSTRAINT FOREIGN KEY (`StateId`) REFERENCES `MstStates`(`Id`),
    CONSTRAINT FOREIGN KEY (`CityId`) REFERENCES `MstCities`(`Id`),
    CONSTRAINT FOREIGN KEY (`BillStateId`) REFERENCES `MstStates`(`Id`),
    CONSTRAINT FOREIGN KEY (`BillCityId`) REFERENCES `MstCities`(`Id`),
    CONSTRAINT FOREIGN KEY (`TaxRoundTypeId`) REFERENCES `MstTaxRoundTypes`(`Id`),
    CONSTRAINT FOREIGN KEY (`CalcTargetTypeId`) REFERENCES `MstCalcTargetTypes`(`Id`)
) ENGINE = InnoDB;