2017-1학기 데이터베이스 Term Project
바이오시스템의과학부 2013250342 민동규
--------------------------------------


1. 주제 : 수강신청시스템

2. 개발환경 :
  OSX : bitnami(apm) : phpMyAdmin : atom(php html css)

3. 기능개요
  1) Teacher가 강의를 등록하면 student가 자신에 맞는 course를 search하여 수강할 수 있음.
  2) index page는 로그인 페이지로 회원가입과 로그인 기능을 구현했다.
  3) 계정은 user과 admin두가지가 존재한다.
  4) user는 일반 사용자로, main / myProfile / Board / search / Logout의 기능을 구현했다.
  5) amdin은 관리자로 새로운 student를 등록하거나, 새로운  teacher를 등록할 수 있다.
  6) 또한 admin은 student와 teacher 개개인의 information을 열람할 수잇다.

4. 기능별 process
  1) 로그인 : index -> main
  2) 회원가입 : index -> signin -> signinProcess -> index
  3) 마이페이지 : main -> myprofile
  4) 강의검색 : main -> search -> searchProcess -> searchResult
  5) 게시물 업로드 : main -> Board -> postingProcess -> Write
  6) 로그아웃 : main -> index
  7) 학생정보조회 : index -> studentInfo
  8) 강사정보조회 : index -> teacherInfo
  9) 신규학생등록 : index -> studentInfo -> studentRegister -> registerProcedssStudent -> studyInfo
  10) 신규강사등록 : index -> teacherInfo -> teacherRegister -> registerProcedssTeacher -> studyInfo

5. database
  min.db는
    - board(id, title, description, studentName, created)
    - course(courseID, teacherID, startTime, startDate, endDate, courseTypeID)
    - coursetype(courseTypeID, month, language, fee)
    - student(studentID, password, studentName, level)
    - teacher(teacherID, teacherName)
    다음과 같은 table들을 보유하고있다.

6. 소감및 발전방향
  html css부터 php, mysql까지 통합적인 기작을 통해 직접 웹 서비스를 만들어 보는 경험은
  물론 과정에서 많은 시간을 소비하고, 좌절을 겪었지만,
  추후 충분히 도움이 될만한 경험이었다고 생각한다.
  다만, mac os가 가진 보안적 특성때문에 서버 및 몇가지 코드에서 문제가 지속적으로 발견되어 아쉬웠다.
  DATE를 활용한 query및 연산에 익숙치 않아 현재는 startDate에 맞는 searching을 구현하지 못했고,
  초기 scehdule table을 따로 분리시켜 user입장에서의 결강 신청 프로세스를 만드려 했으나,
  위와 같은 이유, 그리고 column이 너무 많아진다는 이유로 실패했다.
  또한 table을 채우는데 낭비한 시간이 많아, 다음 같은 프로젝트를 진행한다면 난수를 생성하는 코드를 활용한다면
  보다 효율적인 INSERT를 진행할 수 있을 것으로 보인다.
  해당 보완점을 더한다면 실제로 사용하는 웹에 가까운 결과물을 낼 수 있을 것이라 생각한다.

+ mysql을 첨부하는 방법을 모르겠어서 예시에 나온것처럼 php파일만 첨부했습니다. 혹시 문제가 된다면 빠르게 제출하겠습니다.
// 민동규 : 010 3180 9525 : energy100@korea.ac.kr
